<?php
/**
 * ServicesUOL: Load in scripts
 *
 * @package WordPress
 * @subpackage ServicesUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */



/**
 * Loads scripts, styles, and fonts on the front end.
 */
function ServicesUOL_scripts() {



	// Theme stylesheet.
	wp_enqueue_style( 'global-style', get_stylesheet_directory_uri() . '/css/global.css' );

	wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), null, null, true );

//	//https://github.com/aFarkas/lazysizes
	wp_enqueue_script( 'lazysizes', get_template_directory_uri() . '/js/lazysizes-umd.min.js', '4.0.1', null,  true );


	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/js/fontawesome-all.min.js', '5.0.1', null,  true );


	wp_enqueue_script( 'site-scripts', get_template_directory_uri() . '/js/site-wide-min.js', array('jquery'), null, true );
//
//
//	wp_enqueue_style( 'global-style', get_stylesheet_directory_uri() . '/css/global.css' );
//

	wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key='.get_field('google_maps_api_key', 'options') );


	//Comment Script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action( 'wp_enqueue_scripts',    'ServicesUOL_scripts');
