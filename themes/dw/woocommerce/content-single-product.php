<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
	<div class="page">
		<div class="container">
			<h3>DAVID'S WATCHES</h3>
			<div class="product clearfix">
				<div class="product-modal__galery">
					<ul class="product-modal__list">
						<?php
						    $attachment_ids = $product->get_gallery_image_ids();
						    foreach( $attachment_ids as $attachment_id ) : ?>
								<li>
									<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" alt="">
								</li>
						        
						    <?php endforeach; ?>
					</ul>
					<ul class="product-modal__nav">
						<?php
						    $attachment_ids = $product->get_gallery_image_ids();
						    foreach( $attachment_ids as $attachment_id ) : ?>
								<li>
									<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" alt="">
								</li>
						        
						    <?php endforeach; ?>
					</ul>
				</div>
				<div class="product-modal__desc">
					<div class="product-modal__title">
						<?php echo the_title(); ?>
					</div>
					<div class="product-modal__price">
						$<?php echo $product->get_price(); ?>
					</div>
					<div class="product-modal__btn">
						<?php 
							echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
								sprintf( '<a href="%s" data-quantity="%s" class="button4" %s>buy now</a>',
									esc_url( $product->add_to_cart_url() ),
									esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
									esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
									isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
									esc_html( '$product->add_to_cart_text()' )
								),
							$product, $args );
						?>
					</div>
					<div class="product-modal__text">
						<p><?php echo $product->get_sku(); ?> | <?php echo $product->get_attribute( 'pa_color' ); ?>, <?php echo $product->get_attribute( 'pa_diameter' ); ?>, <?php echo $product->get_attribute( 'pa_production-year' ); ?> |</p>
						<p><?php echo $product->get_description(); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php get_template_part('reviews'); ?>
	<div class="container">
		<div class="articles-widget">
			<div class="row clearfix">
				<div class="col-6">
					<div class="articles-widget__item wow fadeInRight">
						<a href="#" class="articles-widget__link"></a>
						<div class="articles-widget__img" style="background-image: url(<?php bloginfo('template_url'); ?>/sources/img1.jpg);">
							<div class="articles-widget__title">
								WHAT IS A CERTIFIED PRE-OWNED
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="articles-widget__item wow fadeInRight"  data-wow-delay="0.2s">
						<a href="#" class="articles-widget__link"></a>
						<div class="articles-widget__img" style="background-image: url(<?php bloginfo('template_url'); ?>/sources/img2.jpg);">
							<div class="articles-widget__title">
								HOW TO SPOT FAKE ROLEX
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
