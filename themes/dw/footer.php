	<section class="section5">
		<div class="container">
			<div class="subscribe">
				<div class="subscribe-title">
					<span>Subscribe</span>
					Be the first to know about new arrivals
				</div>
				<div class="subscribe-form">
					<form action="#">
						<input type="text" name="" id="" class="subscribe-input" placeholder="Your E-mail">
						<input type="submit" value="Subscribe" class="button3">
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<div class="row clearfix">
				<div class="col-3">
					<div class="f-logo">
						<a href="#">David's Watches</a>
					</div>
					<div class="h-soc clearfix">
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/fb-icon.png" alt=""></a>
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/inst-icon.png" alt=""></a>
					</div>
					<div class="copy">
						© 2018 David's Watches
					</div>
				</div>
				<div class="col-3">
					<ul class="footer-menu">
						<li><a href="#">Home page</a></li>
						<li><a href="#">Buy a Rolex</a></li>
						<li><a href="#">Sell a Rolex</a></li>
					</ul>
				</div>
				<div class="col-3">
					<ul class="footer-menu">
						<li><a href="#">About</a></li>
						<li><a href="#">Buying & Shipping</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<div style="display: none;" id="modal" class="modal-block">
		<div class="modal">
			<div class="modal-title">
				Ваш заказ:
			</div>
			<div class="modal-cart">
				<div class="modal-cart__row">
					<div class="flex-row">
						<div class="modal-cart__img" style="background-image: url(<?php bloginfo('template_url'); ?>/sources/product1.jpg);">
						</div>
						<div class="modal-cart__title">
							Rolex Deepsea
						</div>
					</div>
					<div class="flex-row">
						<div class="modal-cart__cout">
							<div class="spinner">
								<a href="#" class="down">-</a>
								<span>1</span>
								<a href="#" class="up">+</a>
							</div>
						</div>
						<div class="modal-cart__price">$16 195</div>
						<a href="#" class="modal-cart__remove"></a>
					</div>
				</div>
				<div class="modal-cart__row">
					<div class="flex-row">
						<div class="modal-cart__img" style="background-image: url(<?php bloginfo('template_url'); ?>/sources/product2.jpg);">
						</div>
						<div class="modal-cart__title">
							Rolex Deepsea
						</div>
					</div>
					<div class="flex-row">
						<div class="modal-cart__cout">
							<div class="spinner">
								<a href="#" class="down">-</a>
								<span>1</span>
								<a href="#" class="up">+</a>
							</div>
						</div>
						<div class="modal-cart__price">$16 195</div>
						<a href="#" class="modal-cart__remove"></a>
					</div>
				</div>
			</div>
			<div class="modal-cart__total">
				Сумма: $16 395
			</div>
			<div class="modal-form">
				<form action="#">
					<div class="modal-form__row">
						<label for="">Ваше имя</label>
						<input type="text" name="" id="">
					</div>
					<div class="modal-form__row">
						<label for="">Ваш Email</label>
						<input type="text" name="" id="">
					</div>
					<div class="modal-form__row">
						<label for="">Ваш телефон</label>
						<input type="text" name="" id="">
					</div>
					<div class="modal-form__btn">
						<input type="submit" value="Оформить заказ">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/parallax.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
	<script src='<?php bloginfo('template_url'); ?>/js/jquery.waypoints.min.js'></script>
	<script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	
	<script type="text/javascript">
		$(function() {
			$('.section1').parallax({imageSrc: "<?php bloginfo('template_url'); ?>/images/MainRollex_2.jpg"});
		});
	</script>
	<?php wp_footer(); ?>
</body>
</html>
		
