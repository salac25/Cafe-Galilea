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

			<div class="top-bar bg-primary py-2">
				<div class="container">
					<div class="row justify-content-between align-items-center gy-2">
						<div class="col-md-4">
							<ul class="socials list-unstyled d-flex gap-3 m-0">
								<li>
									<a href="/">
										<i class="fa-brands fa-facebook text-white"></i>
									</a>
								</li>

								<li>
									<a href="/">
										<i class="fa-brands fa-instagram text-white"></i>
									</a>
								</li>

								<li>
									<a href="/">
										<i class="fa-brands fa-x-twitter text-white"></i>
									</a>
								</li>


							</ul>
						</div>

						<div class="col-md-8">
							<ul class="list-unstyled d-flex m-0 justify-content-md-end justify-content-start flex-wrap align-items-center">
								<li class="text-white me-3">
									<i class="fa-solid fa-location-dot me-1"></i>
									<small> San Pedro, Bustos, Bulacan 3007</small>
								</li>

								<div class="vr text-white me-3"></div>

								<li class="text-white">
									<i class="fa-solid fa-phone me-1"></i>
									<small>0949 195 9421</small>
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