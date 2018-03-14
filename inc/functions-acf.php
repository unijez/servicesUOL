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


//Social Media
acf_add_local_field_group(array(
	'key' => 'group_5605d61f566b0',
	'title' => 'Social Media Links',
	'fields' => array(
		array(
			'key' => 'field_55f5daf820595',
			'label' => 'Social Media Choices',
			'name' => 'social_media_repeater',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Social Media',
			'sub_fields' => array(
				array(
					'key' => 'field_55f5db1a20596',
					'label' => 'Social Media Type',
					'name' => 'social_media_type',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'twitter' => 'Twitter',
						'facebook' => 'Facebook',
						'linkedin' => 'LinkedIn',
						'pinterest' => 'Pinterest',
						'rss' => 'RSS Feed',
						'youtube' => 'YouTube',
						'google-plus' => 'Google Plus',
						'vimeo' => 'Vimeo',
						'instagram' => 'Instagram',
						'envelope' => 'Email',
					),
					'default_value' => array(
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 1,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_55f5db2520597',
					'label' => 'Social Media Link',
					'name' => 'social_media_link',
					'type' => 'text',
					'instructions' => '',
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
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'social-media-settings',
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


//Related Posts
acf_add_local_field_group(array(
	'key' => 'group_5a718f72a3c03',
	'title' => 'Related Posts',
	'fields' => array(
		array(
			'key' => 'field_5a718f54abf32',
			'label' => 'Choose your related posts',
			'name' => 'related_posts_query',
			'type' => 'relationship',
			'instructions' => 'Choose any related posts for this post/page',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
				1 => 'post',
			),
			'taxonomy' => array(
			),
			'filters' => array(
				0 => 'post_type',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => 3,
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
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


endif;
