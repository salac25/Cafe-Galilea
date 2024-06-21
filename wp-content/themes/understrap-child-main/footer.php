<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper py-0" id="wrapper-footer">

	<div>

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<!-- footer -->

						<footer class="bg-primary text-secondary pt-5">
							<div class="container text-md-left">
								<div class="row text-md-left">

									<div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
										<h1 class="mb-4 font-weight-bold text-secondary">Cafe Galilea</h1>
										<p>Lorem ipsum, dolor sit amet consectetur
											adipisicing elit. Quos voluptatum eveniet cumque, hic
											praesentium itaque eaque error, reprehenderit distinctio
											nisi asperiores inventore cum cupiditate ea perspiciatis
											explicabo? Recusandae, fuga maiores?</p>
									</div>

									<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-3">
										<h1 class=" mb-4 font-weight-bold text-secondary">Categories</h1>
										<ul class="list-unstyled">
											<li>
												<a href="#">
													<h6 class="text-secondary">FULL LIST OF MENU</h6>
												</a>
											</li>
											<li>
												<a href="#">
													<h6 class="text-secondary">PROMO</h6>
												</a>
											</li>
											<li>
												<a href="#">
													<h6 class="text-secondary">MAINS</h6>
												</a>
											</li>
											<li>
												<a href="#">
													<h6 class="text-secondary">ALL DAY BREAKFAST</h6>
												</a>
											</li>
											<li>
												<a href="#">
													<h6 class="text-secondary">CAKES/DESSERTS</h6>
												</a>
											</li>
											<li>
												<a href="#">
													<h6 class="text-secondary">HOT DRINKS</h6>
												</a>
											</li>
											<li>
												<a href="#">
													<h6 class="text-secondary">MILKTEA</h6>
												</a>
											</li>
											<li>
												<a href="#">
													<h6 class="text-secondary">ICE BLENDED DRINKS</h6>
												</a>
											</li>
										</ul>
									</div>

									<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
										<h1 class="mb-4 font-weight-bold text-secondary">Contact Us</h1>
										<p>
											<a href="https://maps.app.goo.gl/2ZpAGjFxuMKEQEr7A" class="text-secondary"><i class="fa-solid fa-map-location-dot me-2"></i> San Pedro, Bustos, Bulacan 3007</a>
										</p>
										<p>
											<a href="#" class="text-secondary"><i class="fa-solid fa-phone text-secondary me-2"></i>+63 949 195 9421</a>
										</p>
										<p>
											<a href="cafegalilea@yahoo.com" class="text-secondary"><i class="fa-solid fa-envelope text-secondary me-2"></i>CafeGalilea@yahoo.com</a>
										</p>
									</div>

								</div>
								<hr class="mb-4">
								<div class="row text-center">
									<div class="col-md-5 col-lg-6">
										<small>
											<span class="text-secondary"><a href="cafegalilea.com" class="text-secondary text-decoration-none">CafeGalilea</a></span>
											&copy; Copyright 2020-2022 All rights reserved
										</small>
									</div>

									<div class="col-md-5 col-lg-5">
										<div class=" text-center">
											<ul class="list-unstyled list-inline">
												<li class="list-inline-item">
													<a href="https://www.facebook.com/cafegalilea/" class="btn-floating btn-sm text-secondary"><i class="fa-brands fa-facebook text-secondary m-1 fs-5"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="https://cafegalilea.com/main-branch/#" class="btn-floating btn-sm text-secondary"><i class="fa-brands fa-x-twitter text-secondary m-1 fs-5"></i></a>
												</li>
												<li class="list-inline-item">
													<a href="https://www.instagram.com/cafe.galilea/" class="btn-floating btn-sm text-secondary"><i class="fa-brands fa-square-instagram text-secondary m-1 fs-5"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</footer>
					</div>


			</div><!-- .site-info -->

			</footer><!-- #colophon -->

		</div><!-- col -->

	</div><!-- .row -->

</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. 
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>