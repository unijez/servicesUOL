<?php

acf_add_local_field_group(array(
	'key' => 'group_5b05833c05b55',
	'title' => 'Front Page Title and Introductory Content Editing',
	'fields' => array(
		array(
			'key' => 'field_5b05838892790',
			'label' => 'Front Page Title',
			'name' => 'front_page_title',
			'type' => 'textarea',
			'instructions' => 'Enter the greeting heading for the front page',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Welcome to the UoL website',
			'placeholder' => '',
			'maxlength' => 40,
			'rows' => '',
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5b0584fb92791',
			'label' => 'Front Page Greeting Message',
			'name' => 'front_page_message',
			'type' => 'wysiwyg',
			'instructions' => 'Enter the greeting text for the front page',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 0,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => -2,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

 ?>
