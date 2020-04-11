<?php get_header(); ?>
	<section class="section2" id="section2">
		<div class="container">
			<div class="catalog">
				<div class="block-title" data-text="Gallery">
					<span>
						Rolex <br>
						Watch <br>
						gallery
					</span>
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

						<div class="col-4">
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
			<div class="catalog-load">
				<!--a href="#">Load next 6-12 watches</a-->
			</div>
			<div class="s2-btn">
				<a href="<?php bloginfo('url'); ?>/shop" class="button2">Show all watches</a>
			</div>
		</div>
	</section>
	<section class="section3">
			<div class="container">
				<div class="block-title" data-text="REVIEWS">
					<span>
						Read what <br>
						our customers <br>
						things about us
					</span>
				</div>
			</div>
			<div class="reviews">
				<ul class="reviews-slider owl-carousel">
					<li>
						<div class="reviews-item clearfix">
							<div class="reviews-item__img">
								<img src="<?php bloginfo('template_url'); ?>/sources/photo4.png" alt="">
							</div>
							<div class="reviews-item__text">
								<div class="reviews-item__author">
									<span>David Braun</span>
									Bought Rolex Daytona
								</div>
								<p>Guys know their stuff! Well versed in watches. This is my first Rolex watch. And the guys helped me make the right choice, which I was very pleased with.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="reviews-item clearfix">
							<div class="reviews-item__img">
								<img src="<?php bloginfo('template_url'); ?>/sources/photo4.png" alt="">
							</div>
							<div class="reviews-item__text">
								<div class="reviews-item__author">
									<span>David Braun</span>
									Bought Rolex Daytona
								</div>
								<p>Guys know their stuff! Well versed in watches. This is my first Rolex watch. And the guys helped me make the right choice, which I was very pleased with.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="reviews-item clearfix">
							<div class="reviews-item__img">
								<img src="<?php bloginfo('template_url'); ?>/sources/photo4.png" alt="">
							</div>
							<div class="reviews-item__text">
								<div class="reviews-item__author">
									<span>David Braun</span>
									Bought Rolex Daytona
								</div>
								<p>Guys know their stuff! Well versed in watches. This is my first Rolex watch. And the guys helped me make the right choice, which I was very pleased with.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="reviews-item clearfix">
							<div class="reviews-item__img">
								<img src="<?php bloginfo('template_url'); ?>/sources/photo4.png" alt="">
							</div>
							<div class="reviews-item__text">
								<div class="reviews-item__author">
									<span>David Braun</span>
									Bought Rolex Daytona
								</div>
								<p>Guys know their stuff! Well versed in watches. This is my first Rolex watch. And the guys helped me make the right choice, which I was very pleased with.</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
	</section>
	<section class="section4">
		<div class="container">
			<div class="block-title" data-text="FAQ">
				<span>
					Frequently <br>
					asked <br>
					questions
				</span>
			</div>
			<div class="quesion-list">
				<div class="quesion-item">
					<div class="quesion-item__wrapp">
						
						Так, а что я могу найти тут ?
						<div class="quesion-item__hidden">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti beatae nemo ipsam nisi optio illo perspiciatis reprehenderit nulla, quis numquam illum autem fuga rem alias at vel laudantium blanditiis ut temporibus similique a excepturi consequatur. Voluptatibus ducimus maiores fugiat eum commodi, assumenda sint nobis voluptas libero repellat, facere velit, ipsum? <br>
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="quesion-item">
					<div class="quesion-item__wrapp">
						
						Ну скажем, ответы на самые популярные вопросы
						<div class="quesion-item__hidden">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti beatae nemo ipsam nisi optio illo perspiciatis reprehenderit nulla, quis numquam illum autem fuga rem alias at vel laudantium blanditiis ut temporibus similique a excepturi consequatur. Voluptatibus ducimus maiores fugiat eum commodi, assumenda sint nobis voluptas libero repellat, facere velit, ipsum? <br>
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="quesion-item">
					<div class="quesion-item__wrapp">
						
						how can I be sure that the watch is not fake?
						<div class="quesion-item__hidden">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eveniet modi, inventore praesentium reiciendis, corrupti ullam libero perspiciatis fuga nihil veritatis dicta facere nulla magni ut quas qui provident incidunt fugiat! Natus reiciendis veritatis hic, quam incidunt laborum! Vel aspernatur qui porro voluptates. Enim perspiciatis impedit, ea quaerat minus ex. <br>
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="quesion-item">
					<div class="quesion-item__wrapp">
						
						We are professionals in our field and for more than 10 years we have been buying up luxury watches. You can read the article on our blog on how to distinguish the original from the fake
						<div class="quesion-item__hidden">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic vitae voluptatibus minus inventore commodi! Doloremque eius ut quas id neque eaque optio, quibusdam. Quasi sequi alias labore aspernatur, expedita hic enim, nulla ullam obcaecati doloribus numquam facilis provident libero optio placeat nihil quos ad at, natus. Perspiciatis consequatur, natus maiores. <br>
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="quesion-item">
					<div class="quesion-item__wrapp">
						
						А где я могу найти более подробную информацию ?
						<div class="quesion-item__hidden">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolores animi praesentium, est dolor culpa voluptate fugiat, rerum ut laborum sint, temporibus eligendi fuga dolorem saepe neque odit dicta debitis excepturi commodi iste. Eum impedit, dignissimos eius voluptatem blanditiis, reprehenderit quibusdam! Eveniet neque unde enim hic itaque, ipsam minima fugit. <br>
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<style type="text/css">
		.section5 {
			display: none;
		}
	</style>
<?php get_footer(); ?>