jQuery(document).ready(function(t){
// Toggle search form
t(".search-toggle").on("click",function(){return t(this).toggleClass("active"),t(".header-search").slideToggle(),t(".header-search #s").focus(),!1}),
//	Slider Plugin
t(".hero-header").slick({dots:!0,pauseOnHover:!0,arrows:!1,slidesToShow:1,slidesToScroll:1,autoplay:!1,autoplaySpeed:2500}),
//	Comment Tabs
t("ul.comment-tabs li").click(function(){var e=t(this).attr("data-tab");t("ul.comment-tabs li").removeClass("current"),t(".comment-tab__tab-content").removeClass("current"),t(this).addClass("current"),t("#"+e).addClass("current")})
/************Mobile Menu************/;var e=t(".mobile-menu-button"),s=t(".mobile-navigation"),a=t("body");e.on("click",function(){t(this).toggleClass("menu-active"),s.toggleClass("menu-active"),a.toggleClass("stop-scroll"),s.slideToggle()})});