<?php get_header(); ?>

	<?php if(have_posts()): the_post(); ?>
		<div class="page">
			<div class="container">
				<style type="text/css">
					.woocommerce-product-search-filter-products-prefix{
						display: none;
					}
				</style>
				<div class="block-title" data-text="Gallery">
					<span>
						Rolex <br>
						Watch <br>
						gallery
					</span>
				</div>
				<div class="clearfix">
					<div class="catalog">
						<div class="row clearfix">
							<?php echo do_shortcode( '[woocommerce_product_filter_products]' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	
	<section class="section4">
		<div class="container">
			<div class="seo-text">
				<h3>About Rolex Watches</h3>
				<p>Since 1905, Rolex has been at the forefront of mechanical watchmaking and has become one of the most well-known and respected luxury brands in the entire world. Synonymous with precision, quality, and exclusivity, Rolex watches are instantly recognizable for their iconic designs, making them an internationally recognized symbol of success and personal accomplishment.</p>

				<p>From highly-capable sport and professional watches, such as the Submariner, Daytona, and GMT-Master, to elegant and classically styled timepieces like the Datejust, Oyster Perpetual, and Day-Date President, Rolex manufacturers watches that perfectly cater to nearly every possible lifestyle. As the most trusted name in pre-owned Rolex, Bob's Watches is the leading online marketplace for luxury timepieces, where customers can buy, sell, and trade secondhand Rolex watches at fair market prices.</p>

				<p>2019 Update: For anyone who has been watching closely, Rolex watches have been on fire lately with demand outstripping supply for a number of models. Genuine watch enthusiasts and collectors have likely seen Rolex watches appreciate significantly.</p>

			</div>
		</div>
	</section>
<?php get_footer(); ?>