<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<div class="page">
			<div class="container">
				<h2 class="entry_title">
					<?php the_title(); ?>
				</h2>

				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php get_footer(); ?>