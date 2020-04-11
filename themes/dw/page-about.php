<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<div class="page">
			<div class="container wow fadeInUp"  data-wow-delay="0.4s">
				<div class="about">
					<p>Hi, I'm David and our company is an online, modern solution for buying and selling watches. This is a big purchase and we don't think it should be overwhelming or risky. All of our certified, authentic Rolex watches have been carefully serviced and restored to mint condition. And while our business has grown rapidly over the past years, we hold strong to our commitment of offering the highest quality customer service.</p>
				
					<br><br>
					<p>Essentially, we're your watch guide. We'll help you find something new for your wrist or help you leave behind something that you just aren't that into anymore. Whichever solution you need, we strive to make sure that you leave feeling confident you made the right choice.</p>
				</div>
				<div class="about-author">
					<div class="about-author__img">
						<img src="<?php bloginfo('template_url'); ?>/sources/EzraKlein.jpg" alt="">
					</div>
					<div class="about-author__desc">
						David Braun
						<span>Founder</span>
					</div>
				</div>
			</div>
		</div>
	<div class="img-widget clearfix">
		<div class="img-widget__col1">
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/sources/img3.webp" alt=""></a>
		</div>
		<div class="img-widget__col2">
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/sources/img4.jpg" alt=""></a>
		</div>
	</div>
	<div class="block-title2 wow fadeIn">
		Follow Us in Instagram
	</div>
	<div class="inst-widget clearfix">
		<?php echo do_shortcode('[instagram-feed]'); ?>
	</div>
	<div class="contacts wow fadeIn">
		<div class="contacts-text">
			<div class="block-title2">Contact us:</div>
			<p><span>Phone:</span> +1 (347) 571-9423</p>
			<p><span>E-mail:</span> davids.watches@gmail.com</p>
			<p><span>Loft Pineapple, 22 Pink Street, New York</span></p>
			<div class="h-soc">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/inst-icon3.png" alt=""></a>
			</div>
		</div>
	</div>
	<?php endif; ?>
<?php get_footer(); ?>