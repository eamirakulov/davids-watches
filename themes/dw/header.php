<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?php echo bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
	<a href="<?php bloginfo('url'); ?>/cart" class="cart">
		<i><?php echo WC()->cart->get_cart_contents_count(); ?></i>
	</a>
	<?php if(is_page('home') || isset( $wp_query ) && (bool) $wp_query->is_posts_page) : ?>
	<section class="section1">
		<header class="header">
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" width="90" class="">
				</a>
			</div>
			<div class="header-toggle">
				<ul class="navigation">
					<li><a href="<?php bloginfo('url'); ?>/buy-a-rolex">Buy a Rolex</a></li>
					<li><a href="<?php bloginfo('url'); ?>/contact">Contact us</a></li>
					<li><a href="<?php bloginfo('url'); ?>/faq">FAQ</a></li>
				</ul>
				<div class="h-soc">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/fb-icon.png" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/inst-icon.png" alt=""></a>
				</div>
			</div>
			<a href="#" class="menu-btn"><span class="button-stik"></span></a>
		</header>

		<div class="container">
			<div>
				<div class="s1-title">
					<div class="s1-title__photo">
						<img src="<?php bloginfo('template_url'); ?>/sources/photo1.png" alt="">
					</div>
					<div class="s1-title__text">
						Hey, Im David
					</div>
				</div>
				<div class="s1-text">
					<p>Привет, я Дэвид основатель компании и мои партнеры «имена». № года назад из нашей страсти к лакшери часам, мы сделали бизнес. На этой странице вы найдете часы отобранные лично нами, которые по нашему мнению являются лучшим предложением достойным наших пользователей.</p>

					<p>Все сделки и любые вопросы решаются лично мной и моими партнерами, чтобы процесс изучения и приобретения был для вас максимально понятным и прозрачным.</p>
				</div>
				<div class="s1-team">
					<div class="s1-team__item">
						<div class="s1-team__img">
							<img src="<?php bloginfo('template_url'); ?>/sources/photo2.png" alt="">
						</div>
						<div class="s1-team__text">
							<span>Brian</span>
							Watch master 
						</div>
					</div>
					<div class="s1-team__item">
						<div class="s1-team__img">
							<img src="<?php bloginfo('template_url'); ?>/sources/photo3.png" alt="">
						</div>
						<div class="s1-team__text">
							<span>Brian</span>
							Watch master 
						</div>
					</div>
				</div>
			</div>
			<a href="#section2" class="s1-down">Go to Watches</a>
			<a class="s1-btn" href="https://wa.me/996700396117" target="_blank">Ask me a questions</a>
		</div>
		<?php else : ?>
		
		<header class="header header-fluid">
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/logo2.png" alt="" width="90" class="">
				</a>
			</div>
			<div class="header-toggle">
				<ul class="navigation">
					<li><a href="<?php bloginfo('url'); ?>/buy-a-rolex">Buy a Rolex</a></li>
					<li><a href="<?php bloginfo('url'); ?>/contact">Contact us</a></li>
					<li><a href="<?php bloginfo('url'); ?>/faq">FAQ</a></li>
				</ul>
				<div class="h-soc">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/fb-icon.png" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/inst-icon.png" alt=""></a>
				</div>
			</div>
			<a href="#" class="menu-btn"><span class="button-stik"></span></a>
		</header>
		<?php endif; ?>
	</section>