<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$bootstrap_version = get_theme_mod('understrap_bootstrap_version', 'bootstrap4');
$navbar_type       = get_theme_mod('understrap_navbar_type', 'collapse');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<header id="wrapper-navbar">

			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-4 ">
							<ul class="top-bar__contact">
								<li>
									<i class="fa fa-phone rounded-circle" aria-hidden="true"></i>
									<a href="tel: 09123456789">0928 652 8039</a>
								</li>

								<li>
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<a href="mailto:orders.cafegalilea@yahoo.com">orders.cafegalilea@yahoo.com</a>
								</li>
							</ul>
						</div>

						<div class="col-md-8">
							<ul class="top-bar__contact">
								<li>
									<i class="fa fa-truck" aria-hidden="true"></i>
									Free Shipping
								</li>

								<li>
									<i class="fa fa-history" aria-hidden="true"></i>
									30 Days Moneyback Guarantee
								</li>

								<li>
									<i class="fa fa-user-circle" aria-hidden="true"></i>
									24/7 Customer Support
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>


			<a class="skip-link <?php echo understrap_get_screen_reader_class(true); ?>" href="#content">
				<?php esc_html_e('Skip to content', 'understrap'); ?>
			</a>

			<?php get_template_part('global-templates/navbar', $navbar_type . '-' . $bootstrap_version); ?>

		</header><!-- #wrapper-navbar -->