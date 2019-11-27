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
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="col-3">
	<div class="product-item wow fadeInUp" data-wow-delay="0">
		<a href="<?php the_permalink(); ?>" class="product-item__link"></a>
		<div class="product-item__img">
			<span class="product-item__img1" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></span>
			<span class="product-item__img2" style="background-image: url(<?php echo get_field('second_image'); ?>);"></span>
		</div>
		<div class="product-item__title">
			<span><?php the_title(); ?></span>
			<?php echo $product->get_sku(); ?> | <?php echo $product->get_attribute( 'pa_color' ); ?>, <?php echo $product->get_attribute( 'pa_diameter' ); ?>, <?php echo $product->get_attribute( 'pa_production-year' ); ?> |
			<span class="product-item__price">$<?php echo $product->get_price(); ?></span>
		</div>
	</div>
</div>
