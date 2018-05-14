<?php


	/**
	 * Enable ACF Site Options
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */


	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
			'position' => 64,
			'icon_url' => 'dashicons-welcome-widgets-menus'

		));

		acf_add_options_page(array(
		        'page_title'    => 'Social Media',
		        'menu_title'    => 'Social Media',
		        'menu_slug'     => 'social-media-settings',
		        'capability'    => 'edit_posts',
		        'parent_slug'	=> 'theme-general-settings',
		        'redirect'              => false
		));

		acf_add_options_page(array(
		        'page_title'    => 'Contact Details',
		        'menu_title'    => 'Contact Info',
		        'menu_slug'     => 'contact-details-settings',
		        'capability'    => 'edit_posts',
		        'parent_slug'	=> 'theme-general-settings',
		        'redirect'              => false
		));

//		acf_add_options_sub_page(array(
//			'page_title' 	=> 'Theme Header Settings',
//			'menu_title'	=> 'Header',
//			'parent_slug'	=> 'theme-general-settings',
//		));
//
//		acf_add_options_sub_page(array(
//			'page_title' 	=> 'Theme Footer Settings',
//			'menu_title'	=> 'Footer',
//			'parent_slug'	=> 'theme-general-settings',
//		));


	}





// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');


if( function_exists('acf_add_local_field_group') ):

	//Social Media Links
	require get_template_directory() . '/inc/acfs/social-media-acf.php';

	//Social Media Front Page Text
	require get_template_directory() . '/inc/acfs/social-media-text-acf.php';

	//Releated Link Boxes
	require get_template_directory() . '/inc/acfs/releated-posts-acf.php';

	//Post/Page Description
	require get_template_directory() . '/inc/acfs/postpage-description-acf.php';

	//Extended Navigation
	require get_template_directory() . '/inc/acfs/extended-navigation-acf.php';

	require get_template_directory() . '/inc/acfs/interactive-maps-acf.php';

	require get_template_directory() . '/inc/acfs/contact-us-acf.php';

	require get_template_directory() . '/inc/acfs/maximum-title-length-acf.php';

endif;
