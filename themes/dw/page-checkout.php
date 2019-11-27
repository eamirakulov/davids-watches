<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<div>
			<article class="page">
				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	<?php endif; ?>
<?php get_footer(); ?>