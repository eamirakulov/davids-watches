$(function(){
	$(".reviews-slider").owlCarousel({
		loop:true,
		items:1,
		autoplay:true,
		nav: true,
		dots: true
	})

	$(".filter-list__link").on('click', function(e){
		e.preventDefault();
		var btn = $(this),
			drop = btn.next();
		if(btn.hasClass('active')){
			btn.removeClass("active")
			drop.stop(true,true).slideUp(100);
		}else{
			btn.addClass('active')
			drop.stop(true,true).slideDown(100);
		}
	})

	$(document).mouseup(function (e){
		var block = $(".filter-drop");
		if($(window).width() > 1050){
			if (!block.is(e.target)
				&& block.has(e.target).length === 0) {
				block.slideUp(100)
				$(".filter-list__link").removeClass('active')
			}
		}
		
	});

	// $(".product-item__link").on('click', function(){
	// 	var modal = $(this).closest('.product-item').find(".product-modal").fadeIn()
	// 	modal.find(".product-modal__list").slick({
	// 		slidesToShow: 1,
	// 		slidesToScroll: 1,
	// 		arrows: false,
	// 		fade: true,
	// 		asNavFor: modal.find('.product-modal__nav')
	// 	});

	// 	modal.find(".product-modal__nav").slick({
	// 		slidesToShow: 3,
	// 		slidesToScroll: 1,
	// 		dots: false,
	// 		centerMode: true,
	// 		focusOnSelect: true,
	// 		asNavFor: modal.find('.product-modal__list')
	// 	});
	// })

	$(".product-modal__list").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true
	});

	$(".product-modal__close").on('click', function(){
		var modal = $(this).closest('.product-modal').fadeOut()
		setTimeout(function(){
			modal.find(".product-modal__list").slick('unslick');

			modal.find(".product-modal__nav").slick('unslick');
		},500)
	})

	$(".modal-link").on('click', function() {
		$.fancybox.open({
			src  : '#modal',
			type : 'inline',
			opts : {
				afterShow : function( instance, current ) {
					var modal = $('.product-modal').fadeOut()
					setTimeout(function(){
						modal.find(".product-modal__list").slick('unslick');

						modal.find(".product-modal__nav").slick('unslick');
					},500)
				}
			}
		});
	});

	$(".spinner .up").on('click', function(){
		var counter = $(this).closest(".spinner").find('span'),
			i = counter.text()
			if(i == 99) die();
			i++;
			counter.text(i);
			return false
	})

	$(".spinner .down").on('click', function(){
		var counter = $(this).closest(".spinner").find('span'),
			i = counter.text()
			if(i == 0) die();
			i--;
			counter.text(i);
			return false
	})

	$(".file input[type='file']").change(function(){
		var file = $(this).val().split('\\').pop();
		$(this).next().html(file);
	})


	var nav = $(".scroll")
	$(".tracked").waypoint(function(){
		var hash = $(this).attr('id');

		$.each(nav, function(){
			if($(this).attr('href').slice(1) == hash){
				$(".scroll").removeClass('active')
				$(this).addClass('active')
			}
		});
	},{ offset: '125px'});

	$(".scroll").click(function(e){
		e.preventDefault()
		var el = $(this).attr('href');
		
		
		if($('html').scrollTop() > $(".page").height()){
			$('body, html').animate({
				scrollTop: $(el).offset().top - 127
			}, 500);
		}else{
			$('body, html').animate({
				scrollTop: $(el).offset().top - 123
			}, 500);
		}
	});

	$(".menu-btn").on('click', function(e){
		e.preventDefault();
		var btn = $(this),
			menu = $(".header-toggle");

		if(btn.hasClass('active')){
			btn.removeClass('active')
			menu.stop(true,true).slideUp(200)
		}else{
			btn.addClass('active')
			menu.stop(true,true).slideDown(200)
		}
	})

	$(".filter-btn").on('click', function(){
		var btn = $(this),
			drop = btn.next();

		if(btn.hasClass('active')){
			btn.removeClass('active')
			drop.stop(true,true).slideUp(300)
		}else{
			btn.addClass('active')
			drop.stop(true,true).slideDown(300)
		}
	})

<<<<<<< HEAD
	new WOW().init();

=======
>>>>>>> Adj march
	$(".product-search-filter-terms-heading").on('click', function(){
		var btn = $(this),
			drop = btn.closest(".product-search-filter-terms").find(".selectize-control");

		if(btn.hasClass('active')){
			btn.removeClass('active')
<<<<<<< HEAD
			drop.removeClass('active')
		}else{
			btn.addClass('active')
			drop.addClass('active')
		}
	})

	$(document).mouseup(function (e){
		var block = $(".selectize-control");
		if($(window).width() > 1050){
			if (!block.is(e.target)
				&& block.has(e.target).length === 0) {
				block.removeClass('active')
				$(".product-search-filter-terms-heading").removeClass('active')
			}
		}
		
=======
			drop.stop(true,true).slideUp(200)
		}else{
			btn.addClass('active')
			drop.stop(true,true).slideDown(200)
		}
	})

	$(".quesion-item").on('click', function(){
		var btn = $(this),
			drop = $(this).find(".quesion-item__hidden")
		if(btn.hasClass('active')){
			btn.removeClass('active')
			drop.hide(300)
		}else{
			btn.addClass('active')
			drop.show(300)
		}
	})

	$(".quesion-item__close").on('click', function(){
		var btn = $(this),
			drop = $(this).closest(".quesion-item").find(".quesion-item__hidden")

		$(this).closest(".quesion-item").removeClass('active')
		drop.hide(300)
		return false;
	})

		$('.s1-down').click(function(){
		var el = $(this).attr('href');
		$('body, html').animate({
			scrollTop: $(el).offset().top }, 800);
		return false; 
>>>>>>> Adj march
	});
})