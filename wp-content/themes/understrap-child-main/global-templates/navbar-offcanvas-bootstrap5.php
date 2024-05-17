<?php

/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>



<nav id="main-nav" class="navbar navbar-expand-md navbar-light bg-secondary" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e('Main Navigation', 'understrap'); ?>
	</h2>


	<div class="<?php echo esc_attr($container); ?>">

		<!-- Your site branding in the menu -->

		<?php get_template_part('global-templates/navbar-branding'); ?>

		<button class="navbar-toggler text-primary order-2 order-md-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e('Open menu', 'understrap'); ?>">
			<span class="navbar-toggler-icon text-primary"></span>
		</button>

		<div class="offcanvas offcanvas-end bg-secondary" tabindex="-1" id="navbarNavOffcanvas">

			<div class="offcanvas-header justify-content-end">
				<button class="btn-close btn-close-primary text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="<?php esc_attr_e('Close menu', 'understrap'); ?>"></button>
			</div><!-- .offcancas-header -->

			<!-- The WordPress Menu goes here -->
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'offcanvas-body justify-content-center',
					'container_id'    => '',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>
		</div><!-- .offcanvas -->

		<ul class="shop-menus list-unstyled m-0 d-flex align-items-center gap-3 d-md-flex">
			<li>
				<button class="bg-transparent border-0 p-0">
					<i class="fa-solid fa-magnifying-glass"></i>
				</button>
			</li>
			<li>
				<a href="/">
					<i class="fa-solid fa-store"></i>
				</a>
			</li>
			<li>
				<a class="position-relative" href="<?php echo wc_get_cart_url(); ?>" class="custom-cart-icon">
					<i class="fa-solid fa-cart-shopping"></i>
					<?php custom_cart_count(); ?>
				</a>

			</li>
			<li>
				<a href="/">
					<i class="fa-regular fa-user"></i>

				</a>
			</li>
		</ul>

	</div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->