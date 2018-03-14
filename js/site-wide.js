jQuery(document).ready(function($) {


	 /************Mobile Menu************/

	 	var menuButton = $('.nav-button');
	 	var globalNav = $('.global-nav');
		var body = $('html');
		var overlay = $('.overlay');


	 	function mobileMenuLaunch() {
	 		menuButton.add(overlay).click( function(e) {
	 			e.preventDefault();
	 			e.stopPropagation();
	 			e.stopImmediatePropagation();
	 	        var status = globalNav.hasClass('menu-active');

	 	      if(status){

	 	        globalNav.removeClass('menu-active');
	 	        menuButton.removeClass('button-active');
				body.removeClass('stop-scroll');
				overlay.removeClass('menuOpen');

	 	      }else{
	 	        globalNav.addClass('menu-active');
	 	        menuButton.addClass('button-active');
				body.addClass('stop-scroll');
				overlay.addClass('menuOpen');

	 	      }
	 	  });
	 	}

	mobileMenuLaunch();


//	Reading Time Plugin

	var $article = $('.blog-article');

		$article.readingTime({
		    readingTimeAsNumber: false,
			readingTimeTarget: ('.eta'),
			wordCountTarget: $article.find('.word-count'),
			wordsPerMinute: 275,
			lessThanAMinuteString: ('less than a minute'),
			round: true,
			lang: 'en',
			success: function() {
//				console.log('It worked!');
			},
			error: function(message) {
//				console.log(message);
				$article.find('.reading-time').remove();
			}
		});



//	Slider Plugin

	$('.hero-header').slick({
		dots: true,
		pauseOnHover: true,
		arrows: false,
		slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2500
	});



//	Comment Tabs

$('ul.comment-tabs li').click(function(){

		var tab_id = $(this).attr('data-tab');

		$('ul.comment-tabs li').removeClass('current');
		$('.comment-tab__tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})



});
