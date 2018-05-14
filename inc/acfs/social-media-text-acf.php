<?php
//Social Media Front Page Text
acf_add_local_field_group(array(
	'key' => 'group_5ab51bdd11417',
	'title' => 'Social Media Text',
	'fields' => array(
		array(
			'key' => 'field_5ab51c46d46a9',
			'label' => 'Social Media Text',
			'name' => 'social_media_text_',
			'type' => 'text',
			'instructions' => 'Please enter text to accommodate the social media icons, an example: Follow us on all social media platforms to stay in the loop on all Estates and Campus Services updates and events.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Follow us on all social media platforms to stay in the loop on all updates and events.',
			'placeholder' => 'Enter Text',
			'prepend' => '',
			'append' => '',
			'maxlength' => 120,
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
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => 'Text to accommodate social media icons',
));
?>
