<?php
/*
Plugin Name: Widgets for Google Reviews
Plugin Title: Widgets for Google Reviews Plugin
Plugin URI: https://wordpress.org/plugins/wp-reviews-plugin-for-google/
Description: Embed Google reviews fast and easily into your WordPress site. Increase SEO, trust and sales using Google reviews.
Tags: google, google places reviews, reviews, widget, google business
Author: Trustindex.io <support@trustindex.io>
Author URI: https://www.trustindex.io/
Contributors: trustindex
License: GPLv2 or later
Version: 11.8.3
Text Domain: wp-reviews-plugin-for-google
Domain Path: /languages
Donate link: https://www.trustindex.io/prices/
*/
/*
Copyright 2019 Trustindex Kft (email: support@trustindex.io)
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_google = new TrustindexPlugin_google("google", __FILE__, "11.8.3", "Widgets for Google Reviews", "Google");
register_activation_hook(__FILE__, [ $trustindex_pm_google, 'activate' ]);
register_deactivation_hook(__FILE__, [ $trustindex_pm_google, 'deactivate' ]);
add_action('plugins_loaded', [ $trustindex_pm_google, 'load' ]);
add_action('admin_menu', [ $trustindex_pm_google, 'add_setting_menu' ], 10);
add_filter('plugin_action_links', [ $trustindex_pm_google, 'add_plugin_action_links' ], 10, 2);
add_filter('plugin_row_meta', [ $trustindex_pm_google, 'add_plugin_meta_links' ], 10, 2);
if (!function_exists('register_block_type')) {
add_action('widgets_init', [ $trustindex_pm_google, 'init_widget' ]);
add_action('widgets_init', [ $trustindex_pm_google, 'register_widget' ]);
}
if (is_file($trustindex_pm_google->getCssFile())) {
add_action('init', function() {
global $trustindex_pm_google;
if (!isset($trustindex_pm_google) || is_null($trustindex_pm_google)) {
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_google = new TrustindexPlugin_google("google", __FILE__, "11.8.3", "Widgets for Google Reviews", "Google");
}
$path = wp_upload_dir()['baseurl'] .'/'. $trustindex_pm_google->getCssFile(true);
if (is_ssl()) {
$path = str_replace('http://', 'https://', $path);
}
wp_register_style('ti-widget-css-google', $path, [], filemtime($trustindex_pm_google->getCssFile()));
});
}
if (!function_exists('ti_exclude_js')) {
function ti_exclude_js($list) {
$list []= 'trustindex.io';
return $list;
}
}
add_filter('rocket_exclude_js', 'ti_exclude_js');
add_filter('litespeed_optimize_js_excludes', 'ti_exclude_js');
if (!function_exists('ti_exclude_inline_js')) {
function ti_exclude_inline_js($list) {
$list []= 'Trustindex.init_pager';
return $list;
}
}
add_filter('rocket_excluded_inline_js_content', 'ti_exclude_inline_js');
add_action('init', [ $trustindex_pm_google, 'init_shortcode' ]);
add_filter('script_loader_tag', function($tag, $handle) {
if (strpos($tag, 'trustindex.io/loader.js') !== false && strpos($tag, 'defer async') === false) {
$tag = str_replace(' src', ' defer async src', $tag);
}
return $tag;
}, 10, 2);
add_action('init', [ $trustindex_pm_google, 'register_tinymce_features' ]);
add_action('init', [ $trustindex_pm_google, 'output_buffer' ]);
add_action('wp_ajax_list_trustindex_widgets', [ $trustindex_pm_google, 'list_trustindex_widgets_ajax' ]);
add_action('admin_enqueue_scripts', [ $trustindex_pm_google, 'trustindex_add_scripts' ]);
add_action('rest_api_init', [ $trustindex_pm_google, 'init_restapi' ]);
if (class_exists('Woocommerce') && !class_exists('TrustindexCollectorPlugin') && !function_exists('ti_woocommerce_notice')) {
function ti_woocommerce_notice() {
$wcNotification = get_option('trustindex-wc-notification', time() - 1);
if ($wcNotification == 'hide' || (int)$wcNotification > time()) {
return;
}
?>
<div class="notice notice-warning is-dismissible" style="margin: 5px 0 15px">
<p><strong><?php echo sprintf(__("Download our new <a href='%s' target='_blank'>%s</a> plugin and get features for free!", 'trustindex-plugin'), 'https://wordpress.org/plugins/customer-reviews-collector-for-woocommerce/', 'Customer Reviews Collector for WooCommerce'); ?></strong></p>
<ul style="list-style-type: disc; margin-left: 10px; padding-left: 15px">
<li><?php echo __('Send unlimited review invitations for free', 'trustindex-plugin'); ?></li>
<li><?php echo __('E-mail templates are fully customizable', 'trustindex-plugin'); ?></li>
<li><?php echo __('Collect reviews on 100+ review platforms (Google, Facebook, Yelp, etc.)', 'trustindex-plugin'); ?></li>
</ul>
<p>
<a href="<?php echo admin_url("admin.php?page=wp-reviews-plugin-for-google/settings.php&wc_notification=open"); ?>" target="_blank" class="trustindex-rateus" style="text-decoration: none">
<button class="button button-primary"><?php echo __('Download plugin', 'trustindex-plugin'); ?></button>
</a>
<a href="<?php echo admin_url("admin.php?page=wp-reviews-plugin-for-google/settings.php&wc_notification=hide"); ?>" class="trustindex-rateus" style="text-decoration: none">
<button class="button button-secondary"><?php echo __('Do not remind me again', 'trustindex-plugin'); ?></button>
</a>
</p>
</div>
<?php
}
add_action('admin_notices', 'ti_woocommerce_notice');
}
add_action('admin_notices', function() {
global $trustindex_pm_google;
$notifications = get_option($trustindex_pm_google->get_option_name('notifications'), []);
foreach ([
'not-using-no-connection',
'not-using-no-widget',
'review-download-available',
'review-download-finished',
'rate-us'
] as $type) {
if (!$trustindex_pm_google->isNotificationActive($type, $notifications)) {
continue;
}
echo '
<div class="notice notice-warning is-dismissible trustindex-notification-row'. ($type === 'rate-us' ? ' trustindex-popup' : '') .'" data-close-url="'. admin_url('admin.php?page=wp-reviews-plugin-for-google/settings.php&notification='. $type .'&action=close') .'">
<p>'. $trustindex_pm_google->getNotificationText($type) .'<p>';
if ($type === 'rate-us') {
echo '
<a href="'. admin_url('admin.php?page=wp-reviews-plugin-for-google/settings.php&notification='. $type .'&action=open') .'" class="ti-close-notification" target="_blank">
<button class="button ti-button-primary button-primary">'. __('Write a review', 'trustindex-plugin') .'</button>
</a>
<a href="'. admin_url('admin.php?page=wp-reviews-plugin-for-google/settings.php&notification='. $type .'&action=later') .'" class="ti-remind-later">
'. __('Maybe later', 'trustindex-plugin') .'
</a>
<a href="'. admin_url('admin.php?page=wp-reviews-plugin-for-google/settings.php&notification='. $type .'&action=hide') .'" class="ti-hide-notification" style="float: right; margin-top: 14px">
'. __('Do not remind me again', 'trustindex-plugin') .'
</a>
';
}
else {
echo '
<a href="'. admin_url('admin.php?page=wp-reviews-plugin-for-google/settings.php&notification='. $type .'&action=open') .'">
<button class="button button-primary">'. $trustindex_pm_google->getNotificationButtonText($type) .'</button>
</a>';
}
if ($type === 'not-using-no-widget') {
echo '
<a href="'. admin_url('admin.php?page=wp-reviews-plugin-for-google/settings.php&notification='. $type .'&action=later') .'" class="ti-remind-later" style="margin-left: 5px">
'. __('Remind me later', 'trustindex-plugin') .'
</a>';
}
echo '
</p>
</div>';
}
});
?>