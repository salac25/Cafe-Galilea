<?php

/**
 * Template Name:Contact Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
    get_template_part('global-templates/hero');
}

$wrapper_id = 'full-width-page-wrapper';
if (is_page_template('page-templates/no-title.php')) {
    $wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. 
                            ?>">

    <div class="<?php echo esc_attr($container); ?>" id="content">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main">

                    <?php
                    while (have_posts()) {
                        the_post();
                        get_template_part('loop-templates/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                    }
                    ?>
                    <!-- Contact page -->
                    <section class="container">
                        <div class="content">
                            <p class="lead fs-5 text-primary p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, veniam.</p>
                            <div class="align-items-center my-5">
                                <h2 class="intro text-center text-primary ">Let's Start a Conversation</h2>
                                <div class="main row justify-content-center flex-row flex-sm-row-reverse">
                                    <div class="map-area order-2 col-md-5 m-3">
                                        <iframe class="map w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.9013138659743!2d120.90753667591412!3d14.942590485585333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397aabb2ab1d2cb%3A0x5dfa965ca50ffb92!2sCafe%20Galilea%20Main%20Branch!5e0!3m2!1sen!2sph!4v1716833029783!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="feedback order-1 col-md-5 px-4 m-3">
                                        <?php echo do_shortcode('[wpforms id="150" title="false"]') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>

            </div><!-- #primary -->

        </div><!-- .row -->

    </div><!-- #content -->
    <!-- col-12 col-md-6 col-lg-4 mt-2 px-4 -->
    <!--  col-12 col-md-6 col-lg-4 mx-auto  -->
</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. 
            ?> -->

<?php
get_footer();
