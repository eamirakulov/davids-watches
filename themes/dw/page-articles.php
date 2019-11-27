<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		
	<div class="page">
		<div class="container">
			<div class="articles">
				<div class="row clearfix">
					<div class="col-6">
						<div class="article-item">
							<a href="<?php bloginfo('url'); ?>/how-to-spot-fake-rolex" class="article-item__link">
								<span class="article-item__img" style="background-image: url(<?php bloginfo('template_url'); ?>/sources/img1.jpg);"></span>
							
								<span class="article-item__date">
									MONDAY, SEPTEMBER 30
								</span>
								<span class="article-item__title">
									HOW TO SPOT FAKE ROLEX
								</span>
							</a>
						</div>
					</div>
					<div class="col-6">
						<div class="article-item">
							<a href="<?php bloginfo('url'); ?>/certified-pre-owned" class="article-item__link">
								<span class="article-item__img" style="background-image: url(<?php bloginfo('template_url'); ?>/sources/img2.jpg);"></span>
							
								<span class="article-item__date">
									MONDAY, SEPTEMBER 31
								</span>
								<span class="article-item__title">
									WHAT IS A CERTIFIED PRE-OWNED
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
<?php get_footer(); ?>