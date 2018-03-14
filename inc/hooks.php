<?php
/**
 * uolBase hook list.
 *
 * @package WordPress
 * @subpackage uolBase
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */



/**
 * HTML <body> hooks
 */
 function uolBase_body_top() {
	 do_action( 'uolBase_body_top' );
 }

 function uolBase_body_bottom() {
	 do_action( 'uolBase_body_bottom' );
 }

/**
 * HTML <header> hooks
 * Outside the <header> element, top & bottom.
 *
 */
function uolBase_head_before() {
	do_action( 'uolBase_head_before' );
}

function uolBase_head_after() {
	do_action( 'uolBase_head_after' );
}

/**
 * HTML <header> hooks
 * Inside the <header> element, top & bottom.
 *
 */
function uolBase_header_top() {
	do_action( 'uolBase_header_top' );
}

function uolBase_header_bottom() {
	do_action( 'uolBase_header_bottom' );
}


/**
 * Semantic <content> hooks
 * Outside & inside main <content> element, top & bottom.
 * 
 */
function uolBase_content_before() {
	do_action( 'uolBase_content_before' );
}

function uolBase_content_after() {
	do_action( 'uolBase_content_after' );
}

function uolBase_content_top() {
	do_action( 'uolBase_content_top' );
}

function uolBase_content_bottom() {
	do_action( 'uolBase_content_bottom' );
}