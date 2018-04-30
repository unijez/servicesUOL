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

			acf_add_local_field_group(array(
			'key' => 'group_5ae6d34fb2764',
			'title' => 'Interactive Maps',
			'fields' => array(
			array(
				'key' => 'field_5ae6f190b4367',
				'label' => 'Google Maps API Key',
				'name' => 'google_maps_api_key',
				'type' => 'text',
				'instructions' => 'Enter your google api key that way the interactive google maps will be shown, follow the instructions on the link below to generate the api key.
			https://developers.google.com/maps/documentation/javascript/get-api-key',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'API Key',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5ae6d36547e48',
				'label' => 'Toggle Google Maps',
				'name' => 'toggle_google_maps',
				'type' => 'true_false',
				'instructions' => 'Toggle the button to enable / disable the google maps on the front page, it is turned off by default',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'Enable interactive Google Maps',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			),
			'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'theme-general-settings',
				),
			),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
			));

			acf_add_local_field_group(array(
			'key' => 'group_5ae6f5b5daaac',
			'title' => 'Contact Us',
			'fields' => array(
			array(
			'key' => 'field_5ae6f5bbbfdcc',
			'label' => 'Address',
			'name' => 'address',
			'type' => 'textarea',
			'instructions' => 'Enter the address, including the building name

			e.g. Charlotte Scott Building
			University of Lincoln
			Brayford Pool
			Lincoln
			LN6 7DH',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'br',
			),
			array(
			'key' => 'field_5ae6f61ae1e29',
			'label' => 'Telephone Number',
			'name' => 'telephone_number',
			'type' => 'text',
			'instructions' => 'Enter the telephone number

			e.g. 01522 88 6777',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			),
			array(
			'key' => 'field_5ae6f65ae1e2a',
			'label' => 'E-mail',
			'name' => 'e-mail',
			'type' => 'email',
			'instructions' => 'Enter your e-mail address

			e.g. estates@lincoln.ac.uk',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			),
			),
			'location' => array(
			array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'contact-details-settings',
			),
			),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
			));

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

endif;
