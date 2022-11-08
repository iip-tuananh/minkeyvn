$('.fancybox-video a').fancybox({
	caption : function( instance, item ) {}
});
function fixHeightProduct(data_parent, data_target, data_image) {
	var box_height = 0;
	var box_image = 0;
	var boxtarget = data_parent + ' ' + data_target;
	var boximg = data_parent + ' ' + data_target + ' ' + data_image;
	$(boximg).css('height', 'auto');
	$($(boxtarget)).css('height', 'auto');
	$($(boxtarget)).removeClass('fixheight');
	$($(boxtarget)).each(function() {
		if ($(this).find(data_image+' .lazyloaded').height() > box_image) {
			box_image = $(this).find($(data_image)).height();
		}
	});
	if (box_image > 0) {
		$(boximg).height(box_image);
	}
	$($(boxtarget)).each(function() {
		if ($(this).height() > box_height) {
			box_height = $(this).height();
		}
	});
	$($(boxtarget)).addClass('fixheight');
	if (box_height > 0) {
		$($(boxtarget)).height(box_height);
	}
	try {
		fixheightcallback();
	} catch (ex) {}
}
document.addEventListener('lazyloaded', function(e){
	fixHeightProduct('.wrapper-project-1', '.product-resize', '.image-resize');
	if(jQuery(window).width() < 992 ) {
		$(window).resize(function() {
			fixHeightProduct('.wrapper-project-1', '.product-resize', '.image-resize');
		});
	}
	fixHeightProduct('.search-list-results', '.product-resize', '.image-resize');
	if(jQuery(window).width() < 992 ) {
		$(window).resize(function() {
			fixHeightProduct('.search-list-results', '.product-resize', '.image-resize');
		});
	}
});
function boxAccount(type){
	$('#account-popover .popover-panel').removeClass('is-selected');
	var newheight = $('#account-popover .popover-panel#'+type ).addClass('is-selected').height();
	if($('.popover-panel').hasClass('is-selected')){
		$('.popover-panel_list').css("height", newheight);
	}
}
// Slide
$(document).ready(function (){
	// Declare Carousel jquery object
	var htmlprev = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 240.823 240.823" style="enable-background:new 0 0 240.823 240.823;" xml:space="preserve"> <g> <path id="Chevron_Right" d="M57.633,129.007L165.93,237.268c4.752,4.74,12.451,4.74,17.215,0c4.752-4.74,4.752-12.439,0-17.179 l-99.707-99.671l99.695-99.671c4.752-4.74,4.752-12.439,0-17.191c-4.752-4.74-12.463-4.74-17.215,0L57.621,111.816 C52.942,116.507,52.942,124.327,57.633,129.007z" /> </g> </svg>';
	var htmlnext = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 240.823 240.823" style="enable-background:new 0 0 240.823 240.823;" xml:space="preserve"><g><path id="Chevron_Right_1_" d="M183.189,111.816L74.892,3.555c-4.752-4.74-12.451-4.74-17.215,0c-4.752,4.74-4.752,12.439,0,17.179l99.707,99.671l-99.695,99.671c-4.752,4.74-4.752,12.439,0,17.191c4.752,4.74,12.463,4.74,17.215,0l108.297-108.261C187.881,124.315,187.881,116.495,183.189,111.816z" /></g></svg>'
	var owl = $('#home-slider .owl-carousel');
	// Carousel initialization
	owl.owlCarousel({
		items:1,
		nav: true,
		navText:[htmlprev,htmlnext],
		dots: $('#home-slider .item').length > 1 ? true:false,
		lazyLoad:true,
		touchDrag: true,
		autoplay: false,
		loop: $('#home-slider .item').length > 1 ? true:false,
		navSpeed:500,
		onChanged: function (event) {
			setTimeout(function(){
				owl.find('.owl-dot').each(function(index) {
					$(this).attr('aria-label', index + 1);
				});
			}, 400);
		}
	});
	// add animate.css class(es) to the elements to be animated
	function setAnimation ( _elem, _InOut ) {
		// Store all animationend event name in a string.
		// cf animate.css documentation
		var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		_elem.each ( function () {
			var $elem = $(this);
			var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

			$elem.addClass($animationType).one(animationEndEvent, function () {
				$elem.removeClass($animationType); // remove animate.css Class at the end of the animations
			});
		});
	}
	// Fired before current slide change
	owl.on('change.owl.carousel', function(event) {
		var $currentItem = $('.owl-item', owl).eq(event.item.index);
		var $elemsToanim = $currentItem.find("[data-animation-out]");
		setAnimation ($elemsToanim, 'out');
	});
	// Fired after current slide has been changed
	owl.on('changed.owl.carousel', function(event) {
		var $currentItem = $('.owl-item', owl).eq(event.item.index);
		var $elemsToanim = $currentItem.find("[data-animation-in]");
		setAnimation ($elemsToanim, 'in');
	});
	// Slide logo partner
	jQuery('#owl-partner-logo').owlCarousel({
		items: 6,
		loop: true,
		autoplay : true,
		slideTransition: 'linear',
		autoplayTimeout : 3000,
		autoplayHoverPause : true,
		autoplaySpeed : 3000,
		nav: false,
		dots: false,
		touchDrag: true,
		responsive: {
			0:{
				items: 3,
			},
			768:{
				items: 4,
			},
			992:{
				items: 6,
			},
			1200:{
				items: 6,
			}
		}
	});
	// Slide page aboutus
	jQuery('.about-us-carousel').owlCarousel({
		loop:true,
		autoplay:false,
		autoplayTimeout:3000,
		margin:15,
		nav:true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		items:1,
		animateOut: 'fadeOut',
		dots: false,
		lazyLoad: false
	});
	// Scrolltop
	jQuery("button.scroltop").on('click', function() {
		jQuery("html, body").animate({
			scrollTop: 0
		}, 1000);
		return false;
	});
	/*jQuery(window).on("scroll", function() {
		var scroll = jQuery(window).scrollTop();
		if (scroll > 900) {
			jQuery("button.scroltop").fadeIn(1000);
		} else {
			jQuery("button.scroltop").fadeOut(1000);
		}
	});*/
	// tab hover
	if (jQuery(window).width() > 991) {
		jQuery('.circle-block-outer[data-toggle="tab-hover"] .wt-icon-box-wraper').on('mouseenter', function(){
			jQuery(this).tab('show');
		});
	}
	// Footer 
	if (jQuery(window).width() < 768) {
		jQuery('.main-footer .footer-col .footer-title').on('click', function(){
			jQuery(this).toggleClass('active').parent().find('.footer-content').stop().slideToggle('medium');
		});
	}
	// Menu mobile
	$('.list-root li a').click(function(e){
		if ($(this).find('i').length){
			e.preventDefault();
			var menu_child_id = $(this).parent().data('menu-root');
			$('.list-root').addClass('mm-subopened');
			$('#' + menu_child_id).addClass('mm-opened');
		} 
	})
	$('.list-child li:first-child a').click(function(){
		$(this).parents('.list-child').removeClass('mm-opened');
		$('.list-root').removeClass('mm-subopened');
	})
	$('.list-child li.level-2 a').click(function(e){
		if ($(this).find('i').length){
			e.preventDefault();
			var menu_sub_id = $(this).parent().data('menu-root');
			$('li.level-2').addClass('mm-subopened');
			$('#' + menu_sub_id).addClass('mm-sub');
		} 
	})
	$('.sub-child li:first-child a').click(function(){
		$(this).parents('.sub-child').removeClass('mm-sub');
		$('.list-child').removeClass('mm-subopened');
	})
	$(document).on("click",".sub-child li.level-3 a",function(e){
		if ($(this).find('i').length){
			e.preventDefault();
			var menu_subnav_id = $(this).parent().data('menu-root');
			$('li.level-3').addClass('mm-open-3');
			$('#' +  menu_subnav_id).addClass('mm-sub-3');
		} 
	});
	$(document).on("click",".sub-child-3 li:first-child a",function(e){
		$(this).parents('.sub-child-3').removeClass('mm-sub-3');
		$('.sub-child').removeClass('mm-open-3');
	});
	/* scroll menu top*/
	var resizeTimer = false,
			resizeWindow = $(window).prop("innerWidth");
	var parentHeight = $('.mainHeader--height').outerHeight();
	var $header = $('.main-header');
	var offset_sticky_header = $header.outerHeight() + 100;
	var offset_sticky_down = 0;
	$('.mainHeader--height').css('min-height', parentHeight);
	$(window).on("resize", function() {
		if(resizeTimer){
			clearTimeout(resizeTimer)
		}
		resizeTimer = setTimeout(function() {
			var newWidth = $(window).prop("innerWidth");
			if (resizeWindow != newWidth) {
				$header.removeClass('hSticky-up').removeClass('hSticky-down').removeClass('hSticky');
				$('.mainHeader--height').css('min-height','');
				parentHeight = $('.mainHeader--height').outerHeight();
				$('.mainHeader--height').css('min-height', parentHeight);
				resizeWindow = newWidth 
			}
		},200);
	});
	setTimeout(function() {
		$header.removeClass('hSticky-up').removeClass('hSticky-down').removeClass('hSticky');
		$('.mainHeader--height').css('min-height','');
		parentHeight = $('.mainHeader--height').outerHeight();
		$('.mainHeader--height').css('min-height', parentHeight);
		jQuery(window).scroll(function() {	
			/* scroll header */
			if(jQuery(window).scrollTop() > offset_sticky_header && jQuery(window).scrollTop() > offset_sticky_down) {	
				if(jQuery(window).width() > 991){		
					$('body').removeClass('locked-scroll');
					$('.header-action-icon').removeClass('show-action');
				}
				$header.addClass('hSticky');	
				if(jQuery(window).scrollTop() > offset_sticky_header + 150){
					$header.removeClass('hSticky-up').addClass('hSticky-down');	
					$('body').removeClass('bSticky-scroll');	
				}
			} 
			else {
				if(jQuery(window).scrollTop() > offset_sticky_header + 150 && (jQuery(window).scrollTop() - 150) + jQuery(window).height()  < $(document).height()) {
					$header.addClass('hSticky-up');
					$('body').addClass('bSticky-scroll');
				}
			}
			if (jQuery(window).scrollTop() <= offset_sticky_down && jQuery(window).scrollTop() <= offset_sticky_header ) {
				$header.removeClass('hSticky-up').removeClass('hSticky-down').removeClass('hSticky');
				$('body').removeClass('bSticky-scroll');
			}
			offset_sticky_down = jQuery(window).scrollTop();
		});	
	}, 300);
	/* on click action icon header*/
	$('.header-action-toggle').click(function(e){
		e.preventDefault();		
		if($(this).parents('.header-action-icon').hasClass('show-action')){
			$('body').removeClass('locked-scroll');
			$(this).parents('.header-action-icon').removeClass('show-action');
		}
		else{
			$('.header-action-icon').removeClass('show-action');
			$('body').addClass('locked-scroll');
			$(this).parents('.header-action-icon').addClass('show-action');		
		}		
	});
	$('body').on('click', '#site-overlay', function(e){
		$('body').removeClass('locked-scroll');
		$('.header-action-icon').removeClass('show-action');
	});
	$('body').on('click', '.link-accented', function(e){
		e.preventDefault();
		boxAccount($(this).attr('aria-controls'));
	});
	$('#account-popover .form-group input').blur(function(){
		var valInput = $(this).val();
		if(valInput == '') {
			$(this).removeClass('is-filled');
		} else {
			$(this).addClass('is-filled');
		}
	});
	// Dropdown Title
	jQuery('.title_block').click(function(){
		$(this).toggleClass('active');
		$(this).next().slideToggle('medium');
	}); 
	// addThis sharing
	if ($('.addThis_listSharing').length > 0){
		$(window).scroll(function(){
			if($(window).scrollTop() > 250 ) {
				$('.addThis_listSharing').addClass('is-show');
			} else {
				$('.addThis_listSharing').removeClass('is-show');
			}
		});
		$('.content_popupform form.contact-form').submit(function(e){
			var self = $(this);
			if($(this)[0].checkValidity() == true){
				e.preventDefault();
				grecaptcha.ready(function() {
					grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {
						self.find('input[name="g-recaptcha-response"]').val(token);
						$.ajax({
							type: 'POST',
							url:'/contact',
							data: $('.content_popupform form.contact-form').serialize(),			 
							success:function(data){		
								var checkerror = $(data).find('.content_popupform .alert-error').html().trim();
								if(checkerror == ''){
									$('.modal-contactform.fade.in').modal('hide');
									setTimeout(function(){ 				
										$('.modal-succesform').modal('show');					
										setTimeout(function(){	
											$('.modal-succesform.fade.in').modal('hide');
										}, 5000);
									},300);
								}
								else{
									$('.content_popupform textarea').css('border-color','red');
								}
							},				
						})
					});
				});
			}
		});
		$(".modal-succesform").on('hidden.bs.modal', function(){				
			location.reload();
		});
	}
	if ($(window).width() < 768 && $('.layoutProduct_scroll').length > 0 ) {
		var curScrollTop = 0;
		$(window).scroll(function(){	
			var scrollTop = $(window).scrollTop();
			if(scrollTop > curScrollTop  && scrollTop > 200 ) {
				$('.layoutProduct_scroll').removeClass('scroll-down').addClass('scroll-up');
			}
			else {
				if (scrollTop > 200 && scrollTop + $(window).height() + 150 < $(document).height()) {
					$('.layoutProduct_scroll').removeClass('scroll-up').addClass('scroll-down');	
				}
			}
			if(scrollTop < curScrollTop  && scrollTop < 200 ) {
				$('.layoutProduct_scroll').removeClass('scroll-up').removeClass('scroll-down');
			}
			curScrollTop = scrollTop;
		});
	}
	/* submit recapcha form */
	$('#header-login-panel form#customer_login').submit(function(e) { 
		var self = $(this);
		if($(this)[0].checkValidity() == true){
			e.preventDefault();
			grecaptcha.ready(function() {
				grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {
					self.find('input[name="g-recaptcha-response"]').val(token);
					self.unbind('submit').submit();
				}); 
			});
		}
	});
	$('#header-recover-panel form').submit(function(e) { 
		var self = $(this);
		if($(this)[0].checkValidity() == true){
			e.preventDefault();
			grecaptcha.ready(function() {
				grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {
					self.find('input[name="g-recaptcha-response"]').val(token);
					self.unbind('submit').submit();
				}); 
			});
		}
	});
	/* submit recapcha form  footer*/
	if($('.news-letter-form-customer').length > 0){
		$('.news-letter-form-customer form.contact-form').submit(function(e) { 
			var self = $(this);
			if($(this)[0].checkValidity() == true){
				e.preventDefault();
				grecaptcha.ready(function() {
					grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {
						self.find('input[name="g-recaptcha-response"]').val(token);
						self.unbind('submit').submit();
					}); 
				});
			}
		});
	}
	// Product page
	// if(window.template.indexOf('product') > -1){
	// 	$('.js-backto-page-history').click(function(){
	// 		window.history.back();
	// 	});
	// }
});
// Menu sidebar
$(document).on("click", ".tree-menu .tree-menu-link .icon-control", function(e){
	e.preventDefault();
	if ($(this).parent().parent().hasClass('active')) {
		$(this).parent().parent().removeClass('active');
		$(this).parent().siblings('ul').slideUp();
	}
	else {
		if( $(this).parent().parent().hasClass("level0") || $(this).parent().parent().hasClass("level1")){
			$(this).parent().parent().siblings().find("ul").slideUp();
			$(this).parent().parent().siblings('li.lv').removeClass("active");
		}
		$(this).parent().parent().addClass('active');
		$(this).parent().siblings('ul').slideDown();
	}
});
/* Search ultimate destop -mobile*/
$('.ultimate-search').submit(function(e) {
	e.preventDefault();
	if( localStorage.getItem('template') == 'theme' ){
var q = '((collection:product>=0)&&(title:product**' + $(this).find('input[name=q]').val() + ')**(tag:product=vi))';
		if(q.indexOf('script') > -1 || q.indexOf('>') > -1){
			alert('Từ khóa của bạn có chứa mã độc hại ! Vui lòng nhập lại key word khác');
			$(this).find('input[name=q]').val('');
		}
		else{
			var q_follow = 'product';
			var query = encodeURIComponent(q);
			window.location = '/search?filter=q=' + query;
			return;
		}
}else{
var q = '((collection:product>=0)&&(title:product**' + $(this).find('input[name=q]').val() + ')**(tag:product=en))';
		if(q.indexOf('script') > -1 || q.indexOf('>') > -1){
			alert('Your keyword contains malicious code ! Please re-enter another key word');
			$(this).find('input[name=q]').val('');
		}
		else{
			var q_follow = 'product';
			var query = encodeURIComponent(q);
			window.location = '/search?filter=q=' + query;
			return;
		}
														 }
});
var $input = $('.ultimate-search input[type="text"]');
$input.bind('keyup change paste propertychange', function() {
	
	var key = $(this).val(),
			$parent = $(this).parents('.wpo-wrapper-search'),
			$results = $(this).parents('.wpo-wrapper-search').find('.smart-search-wrapper');
	
	if( localStorage.getItem('template') == 'theme' ){
		if(key.indexOf('script') > -1 || key.indexOf('>') > -1){
			alert('Từ khóa của bạn có chứa mã độc hại ! Vui lòng nhập lại key word khác');
			$('.ultimate-search input[type="text"]').val('');
		}
		else{
			if(key.length > 0 ){
				$('.ultimate-search input[type="text"]').val($(this).val());
				$(this).attr('data-history', key);
				var q_follow = 'product',
						str = '';
				///str = '/search?type=product&q='+ key + '&view=ultimate-product';
				str = '((collection:product>=0)&&(title:product**' + key + ')**(tag:product=vi))';
				var query = encodeURIComponent(str);
				$.ajax({
					url: '/search?filter=q='+ query + '&view=ultimate-product',
					type: 'GET',
					async: true,
					success: function(data){
						$results.find('.resultsContent').html(data);
					}
				})
				$results.fadeIn();
			}else{
				$results.fadeOut();
			}
		}
	}else{
		if(key.indexOf('script') > -1 || key.indexOf('>') > -1){
			alert('Từ khóa của bạn có chứa mã độc hại ! Vui lòng nhập lại key word khác');
			$('.ultimate-search input[type="text"]').val('');
		}
		else{
			if(key.length > 0 ){
				$('.ultimate-search input[type="text"]').val($(this).val());
				$(this).attr('data-history', key);
				var q_follow = 'product',
						str = '';
				///str = '/search?type=product&q='+ key + '&view=ultimate-product';
				str = '((collection:product>=0)&&(title:product**' + key + ')**(tag:product=en))';
				var query = encodeURIComponent(str);
				$.ajax({
					url: '/search?filter=q='+ query + '&view=ultimate-product-en',
					type: 'GET',
					async: true,
					success: function(data){
						$results.find('.resultsContent').html(data);
					}
				})
				$results.fadeIn();
			}else{
				$results.fadeOut();
			}
		}
	}
})

$('input[name="follow"]').on('change', function(){
	$('.ultimate-search input[type="text"]').trigger('change');
})
$('input[name="follow_mobile"]').on('change', function(){
	$('.ultimate-search input[type="text"]').trigger('change');
})
$('body').click(function(evt) {
	var target = evt.target;
	if (target.id !== 'ajaxSearchResults' && target.id !== 'inputSearchAuto') {
		$("#ajaxSearchResults").hide();
	}
	if (target.id !== 'ajaxSearchResults-dk' && target.id !== 'inputSearchAuto-dk') {
		$("#ajaxSearchResults-dk").hide();
	}
});
$('body').on('click', '.ultimate-search input[type="text"]', function() {
	if ($(this).is(":focus")) {
		if ($(this).val() != '') {
			$(".ajaxSearchResults").show();
		}
	} else {

	}
})



