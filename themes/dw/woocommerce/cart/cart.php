<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;
?>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

		<div class="container">
			<?php do_action( 'woocommerce_before_cart' ); ?>

			<h3>YOUR CART</h3>
			<div class="checkout">
				<table class="checkout-table">
					<thead>
						<tr>
							<td>
								Product
							</td>
							<td>
								Quantity
							</td>
							<td>
								Price
							</td>
						</tr>
					</thead>
					<tbody>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr>
						<td>
							<a href="#" class="modal-cart__remove"></a>
							<div class="flex-row">
								<div class="modal-cart__img" style="background-image: url(<?php echo get_the_post_thumbnail_url($product_id);?>);"></div>
										<div class="modal-cart__title">
									<?php echo $_product->get_name(); ?>
								</div>
							</div>
						</td>
						<td>
							<div class="modal-cart__cout">
								<?php echo $cart_item['quantity']; ?>
							</div>
						</td>
						<td>
							<div class="modal-cart__price"><?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?></div>
						</td>
					</tr>
					<?php
				}
			}
			?>
					</tbody>
				</table>
				<div class="checkout-total">
					Subtotal
					<span><?php  global $woocommerce;
					echo $woocommerce->cart->get_cart_total(); ?></span>
				</div>
				<div class="checkout-btn">
					<a href="<?php bloginfo('url'); ?>/checkout" class="button">checkout</a>
				</div>
				<table style="display: none;">
					<tr>
						<td colspan="6" class="actions">
							<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

							<?php do_action( 'woocommerce_cart_actions' ); ?>

							<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
						</td>
					</tr>
				</table>
			</div>
		</div>
	<?php //do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		//do_action( 'woocommerce_cart_collaterals' );
	?>
</div>

<?php //do_action( 'woocommerce_after_cart' ); ?>
