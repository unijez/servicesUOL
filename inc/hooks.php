<?php
/**
 * ServicesUOL hook list.
 *
 * @package WordPress
 * @subpackage ServicesUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */



/**
 * HTML <body> hooks
 */
 function ServicesUOL_body_top() {
	 do_action( 'ServicesUOL_body_top' );
 }

 function ServicesUOL_body_bottom() {
	 do_action( 'ServicesUOL_body_bottom' );
 }

/**
 * HTML <header> hooks
 * Outside the <header> element, top & bottom.
 *
 */
function ServicesUOL_head_before() {
	do_action( 'ServicesUOL_head_before' );
}

function ServicesUOL_head_after() {
	do_action( 'ServicesUOL_head_after' );
}

/**
 * HTML <header> hooks
 * Inside the <header> element, top & bottom.
 *
 */
function ServicesUOL_header_top() {
	do_action( 'ServicesUOL_header_top' );
}

function ServicesUOL_header_bottom() {
	do_action( 'ServicesUOL_header_bottom' );
}


/**
 * Semantic <content> hooks
 * Outside & inside main <content> element, top & bottom.
 * 
 */
function ServicesUOL_content_before() {
	do_action( 'ServicesUOL_content_before' );
}

function ServicesUOL_content_after() {
	do_action( 'ServicesUOL_content_after' );
}

function ServicesUOL_content_top() {
	do_action( 'ServicesUOL_content_top' );
}

function ServicesUOL_content_bottom() {
	do_action( 'ServicesUOL_content_bottom' );
}