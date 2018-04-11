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

// Edit length of excerpt
function wpdocs_custom_excerpt_length( $length ) {
    return 28;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    if($more[strlen($more) - 1] == '.') {
      return '..';
    } else {
      return '...';
    }
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Add Excerpts for Pages
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

// Single Post Image Function: only allows appropriately sized images
function header_post_image() {
	global $post;
	$image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'hero-header', false);
	if ($image_url[0] != null) {
		list($img_width, $img_height, $img_type, $img_attr) = getimagesize($image_url[0]);
	}
	if ($image_url[0] == "") {
			return false;
	} else {
			if($img_width < 1280 && $img_height < 600) {
				return false;
			} else {
				return $image_url[0];
			}
	}
}

// Default Image Function: adds default image when no preset thumbnail is found
function default_image($thumbnail) {
	if ( has_post_thumbnail() ) {
		the_post_thumbnail($thumbnail);
	} else {
		?><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" /><?php
	}
}

function get_image_result($output) {
	if ($output == false) {
		echo "<div class='backup-slide'></div>";
	}
}
