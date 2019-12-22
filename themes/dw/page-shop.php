<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<div class="page">
			<div class="container">
				<div class="catalog-sort">
					<ul class="sorting-list">
						<?php

						  $taxonomy     = 'product_cat';
						  $orderby      = 'name';  
						  $show_count   = 0;      // 1 for yes, 0 for no
						  $pad_counts   = 0;      // 1 for yes, 0 for no
						  $hierarchical = 1;      // 1 for yes, 0 for no  
						  $title        = '';  
						  $empty        = 0;

						  $args = array(
						         'taxonomy'     => $taxonomy,
						         'orderby'      => $orderby,
						         'show_count'   => $show_count,
						         'pad_counts'   => $pad_counts,
						         'hierarchical' => $hierarchical,
						         'title_li'     => $title,
						         'hide_empty'   => $empty
						  );
						 $all_categories = get_categories( $args );
						 foreach ($all_categories as $cat) {
						    if($cat->category_parent == 0) {
						        $category_id = $cat->term_id;       
						        echo '<li><a style="text-transform: uppercase;" href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';

						        $args2 = array(
						                'taxonomy'     => $taxonomy,
						                'child_of'     => 0,
						                'parent'       => $category_id,
						                'orderby'      => $orderby,
						                'show_count'   => $show_count,
						                'pad_counts'   => $pad_counts,
						                'hierarchical' => $hierarchical,
						                'title_li'     => $title,
						                'hide_empty'   => $empty
						        );
						        $sub_cats = get_categories( $args2 );
						        if($sub_cats) {
						            foreach($sub_cats as $sub_category) {
						                echo  $sub_category->name ;
						            }   
						        }
						    }       
						}
						?>
					</ul>
				</div>

				<div class="clearfix">
					<div class="catalog-sort__filter clearfix">
						<a href="#" class="filter-btn">
							<i class="filter-icon"></i> Фильтр
						</a>
						<div class="catalog-sort__filter-drop">
							<?php echo do_shortcode( '[woocommerce_product_filter_price delay="1000"]' ); ?>
							<?php echo do_shortcode( '[woocommerce_product_filter_attribute attribute="color" style="dropdown" show_thumbnails="no"]' ); ?>
							<?php echo do_shortcode( '[woocommerce_product_filter_attribute attribute="diameter" style="dropdown" show_thumbnails="no"]' ); ?>
							<?php echo do_shortcode( '[woocommerce_product_filter_attribute attribute="box-papers" style="dropdown" show_thumbnails="no"]' ); ?>
							<?php echo do_shortcode( '[woocommerce_product_filter_attribute attribute="bracelet" style="dropdown" show_thumbnails="no"]' ); ?>
							<?php echo do_shortcode( '[woocommerce_product_filter_attribute attribute="condition" style="dropdown" show_thumbnails="no"]' ); ?>
							<?php echo do_shortcode( '[woocommerce_product_filter_attribute attribute="gender" style="dropdown" show_thumbnails="no"] ' ); ?>
							<?php echo do_shortcode( '[woocommerce_product_filter_attribute attribute="metal-type" style="dropdown" show_thumbnails="no"]' ); ?>
							<?php echo do_shortcode( '[woocommerce_product_filter_attribute attribute="production-year" style="dropdown" show_thumbnails="no"]' ); ?>
						</div>
					</div>
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