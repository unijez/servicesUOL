<?php
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
?>
