<?php
//Post/Page Description
acf_add_local_field_group(array(
	'key' => 'group_5acc89b654b33',
	'title' => 'Post/Page Description',
	'fields' => array(
		array(
			'key' => 'field_5acc89ea833b7',
			'label' => 'Post/Page Description',
			'name' => 'postpage_description',
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
			'placeholder' => 'Please enter the description of the post/page.',
			'prepend' => '',
			'append' => '',
			'maxlength' => 90,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'top_level',
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
?>
