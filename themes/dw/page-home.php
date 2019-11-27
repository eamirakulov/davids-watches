<?php get_header(); ?>

	<section class="section2">
		<div class="container">
			<?php get_template_part('articles'); ?>


			<div class="catalog">
				<div class="block-title">
					<span>SHOP</span>
					USED ROLEX WATCHES FOR SALE
				</div>
				<div class="row clearfix">
			<?php
				$args = array(
				'post_type' => 'product',
				'stock' => 1,
				'posts_per_page' => 8,
				'orderby' =>'date',
				'order' => 'DESC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

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
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
			<div class="s2-btn">
				<a href="#" class="button2 wow fadeInUp">All Watches</a>
			</div>
	</section>
	
	
	<?php get_template_part('reviews'); ?>
	<section class="section4">
		<div class="container">
			<div class="seo-text">
				<h3>ABOUT DAVID'S WATCH</h3>
				<p>Founded in 1999, David's Watches is the leading online marketplace for buying, selling and trading <a href="https://www.bobswatches.com/rolex-watches">used Rolex</a> watches for men and women. With over 20 years of experience, and thousands of satisfied customers, we carry the world's largest selection of vintage and used Rolex watches for sale.</p>

				<p>Our pre-owned Rolex exchange is known for providing excellent customer service and offering the best Rolex prices through our low-price guarantee.</p>

				<p>All watches listed on our site are in stock and immediately available for free overnight shipping. Our selection of Rolex watches are meticulously inspected and authenticated by third-party experts, ensuring every luxury watch listed on our store is 100% certified authentic.</p>

				<p>Whether you are looking to buy, trade, or <a href="https://www.bobswatches.com/sell-rolex-watch">sell a Rolex watch</a>, you can always count on us to provide unparalleled customer service and the best prices around</p>
				<br><br>
				<h3>
					WHAT YOU GET WHEN YOU SHOP AT BOB'S WATCHES
				</h3>
				<p>Bob's Watches is the largest and most trusted name in pre-owned luxury watches and jewelry including Rolex, Patek Phillippe, Panerai, Cartier, Tiffany and more. Founded in 1999, Bob's has become the ultimate destination for consumers looking to buy, sell, or trade certified pre-owned Rolex watches, attaining a BBB A+ rating, 5/5 stars in Ekomi, and has been quoted and featured in the Los Angeles Times, Forbes, Inc Magazine, Internet Retailer and the OC Register. Click here to learn more on how to sell a Rolex.</p>
				<p>The Company is pleased to inventory the finest collection of certified pre-owned and slightly used vintage and modern Rolex watches, as well as a select assortment of models from some of the most revered names in luxury timepieces, including Patek Philippe, Cartier, and Panerai. In addition, we offer high end antique estate jewelry and GIA certified diamonds at up to 50% off normal prices. Click here to learn more about the Company, Rolex, and its rich history. All watches are restored using established authorized repair shops with genuine Rolex parts.</p>
				<br><br>
				<h3>
					ABOUT ROLEX
				</h3>
				<p>Rolex watches are synonymous with style, elegance, and sophistication. From its humble beginnings in London in 1905, to becoming one of the most revered brand names in the world, Rolex has and will always remain in the upper echelon of luxury timepieces. Wearing one of these beautifully-designed wristwatches exudes a certain kind of style and grace unmatched in the watchmaking industry. Few other brand names are enamored on such a broad scope, or so universally treasured on such an international scale. From the coveted vintage Rolex collection to the modern Rolex references such as the Rolex Submariner or the Rolex Datejust, there is a model to fit every style</p>
			</div>
		</div>
	</section>
<?php get_footer(); ?>