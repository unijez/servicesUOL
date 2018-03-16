<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package WordPress
 * @subpackage ServicesUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

// Allows custom navigation
 register_nav_menu( 'main', 'Main Menu' );

// Search Function
function collegeBlog_search_form( $form ) {
	$form =
	'<form role="search" method="get" id="searchform" class="site-header__search--form" action="' . esc_url( home_url( '/' ) ). '" >
		<div class="search-container">
			<button type="submit" id="searchsubmit">
				<i class="far fa-search"></i>
			</button>
		</div>
	</form>';

	return $form;
}
add_filter( 'get_search_form', 'collegeBlog_search_form', 100 );
// DISABLE WORDPRESS COMMENTS JS
function itsg_disable_comment_js(){
    wp_deregister_script( 'comment-reply' );
}
add_action( 'init', 'itsg_disable_comment_js' );
