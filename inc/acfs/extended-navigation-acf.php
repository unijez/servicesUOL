<?php
//Extended Navigation
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5acc822ddf014',
	'title' => 'Extended Navigation',
	'fields' => array(
		array(
			'key' => 'field_5acc828c8271f',
			'label' => 'Extended Navigation',
			'name' => 'extended_navigation',
			'type' => 'relationship',
			'instructions' => '',
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
				0 => 'search',
				1 => 'post_type',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 3,
			'max' => 6,
			'return_format' => 'object',
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
	'description' => 'Extended Navigation',
));

endif;
?>
