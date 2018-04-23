jQuery(document).ready(function($) {

// Toggle search form
$(".search-toggle").on("click", function(){
	$(this).toggleClass("active");
	$(".header-search").slideToggle();
	$(".header-search #s").focus();
	return false;
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



	 /************Mobile Menu************/

	 	var menuButton = $('.mobile-menu-button');
	 	var globalNav = $('.mobile-navigation');
		var body = $('body');


		menuButton.on("click", function(){
			$(this).toggleClass("menu-active");
			globalNav.toggleClass("menu-active");
			body.toggleClass("stop-scroll");
			globalNav.slideToggle();
		});






});
