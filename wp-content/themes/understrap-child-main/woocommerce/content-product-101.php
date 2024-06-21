<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>

<div class="product grid">
	<div class="row">
		<div class="col-lg-4">
			<div class="product product-container grid">
				<div class="col-lg-4 col-md-4 col-sm-6 col-12  mb-4">
					<div class="product-grid6">
						<div class="product-image6 m-2 d-flex justify-content-center">
							<?php do_action('woocommerce_before_shop_loop_item_title'); ?>
						</div>
						<div class="product-content text-center">
							<h3 class="title"><?php do_action('woocommerce_shop_loop_item_title'); ?></h3>
							<div class="price fw-bold text-primary text-center"><?php do_action('woocommerce_after_shop_loop_item_title'); ?></div>
						</div>
						<ul class="social-icons list-unstyled d-flex justify-content-center mb-2">
							<li class="mx-2"><a href="#" data-tip="Quick View"><i class="fa-solid fa-eye"></i></a></li>
							<li class="mx-2"><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
							<li class="mx-2"><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>