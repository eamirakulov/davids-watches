<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
	<div class="page">
		<div class="container">
			<h2 class="article-title">
					contacts
				</h2>
				<div class="contact">
					<div class="contacts-logo">
						<a href=""><img src="images/logo2.png" alt=""></a>
					</div>
					<p>For inquiries about retail or questions, please do not hesitate to <br> contact us at:</p>
					<div class="contacts-item">
						<h3>Mail:</h3>
						<a href="#">contactmail@gmail.com</a>
					</div>
					<div class="contacts-item">
						<h3>Connect:</h3>
						<a href="#">Instagram</a>
					</div>
					<div class="contacts-item">
						<h3>Newsletter</h3>
						<div class="subscribe-form">
							<form action="#">
								<input type="text" name="" id="" class="subscribe-input" placeholder="Your E-mail">
								<input type="submit" value="Subscribe" class="button3">
							</form>
						</div>
					</div>
				</div>
			
		</div>
	</div>
	<?php endif; ?>
<?php get_footer(); ?>