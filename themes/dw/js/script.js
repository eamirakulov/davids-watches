$(function(){
	$('.section1').parallax({imageSrc: "images/MainRollex_2.jpg"});
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
		fade: true,
		asNavFor: '.product-modal__nav'
	});

	$(".product-modal__nav").slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			dots: false,
			centerMode: true,
			focusOnSelect: true,
			asNavFor: '.product-modal__list'
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

	$(".menu-btn").on('click', function(){
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
			drop.stop(true,true).slideUp(200)
		}else{
			btn.addClass('active')
			drop.stop(true,true).slideDown(200)
		}
	})

	new WOW().init();
})