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
			<div class="header-toggle">
				<ul class="navigation">
					<li><a href="<?php bloginfo('url'); ?>/buy-a-rolex">Buy a Rolex</a></li>
					<li><a href="<?php bloginfo('url'); ?>/sell-a-rolex">Sell a Rolex</a></li>
					<li><a href="<?php bloginfo('url'); ?>/about">About</a></li>
					<li><a href="<?php bloginfo('url'); ?>/buying-shipping">Buying & Shipping</a></li>
					<li><a href="<?php bloginfo('url'); ?>/faq">FAQ</a></li>
				</ul>
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" width="135px" class="sm-hide">
						<img src="<?php bloginfo('template_url'); ?>/images/logo2.png" alt="" width="70px" class="sm-visible">
					</a>
				</div>
				<div class="h-soc">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/fb-icon.png" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/inst-icon.png" alt=""></a>
				</div>
			</div>
			<a href="#" class="menu-btn"><span class="button-stik"></span></a>
		</header>
		<div class="container">
			<div>
				<div class="s1-title wow fadeInDown" data-wow-delay="0.2s">
					ROLEX EXCHANGE
					<span class="wow fadeInDown" data-wow-delay="0.4s">THE PRE-OWNED ROLEX EXCHANGE</span>
				</div>
				<div class="s1-btns">
					<a href="#" class="button1 wow fadeInDown" data-wow-delay="0.8s">BUY A ROLEX</a>
					<a href="#" class="button1 wow fadeInDown" data-wow-delay="1s">SELL A ROLEX</a>
				</div>
			</div>
		</div>
		<?php else : ?>
		<header class="header header-fluid">
			<div class="header-toggle">
				<ul class="navigation">
					<li><a href="<?php bloginfo('url'); ?>/buy-a-rolex">Buy a Rolex</a></li>
					<li><a href="<?php bloginfo('url'); ?>/sell-a-rolex">Sell a Rolex</a></li>
					<li><a href="<?php bloginfo('url'); ?>/about">About</a></li>
					<li><a href="<?php bloginfo('url'); ?>/buying-shipping">Buying & Shipping</a></li>
					<li><a href="<?php bloginfo('url'); ?>/faq">FAQ</a></li>
				</ul>
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/logo2.png" alt="" width="70px">
					</a>
				</div>
				<div class="h-soc">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/fb-icon2.png" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/inst-icon2.png" alt=""></a>
				</div>
			</div>
			<a href="#" class="menu-btn"><span class="button-stik"></span></a>
		</header>
		<?php endif; ?>
	</section>