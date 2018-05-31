<?php

acf_add_local_field_group(array(
	'key' => 'group_5b0402169d88a',
	'title' => 'Latest News Options',
	'fields' => array(
		array(
			'key' => 'field_5b04021f7abc4',
			'label' => 'Toggle Homepage Latest News',
			'name' => 'toggle_latest_news',
			'type' => 'true_false',
			'instructions' => 'Check the box to enable the latest news on the homepage.
Uncheck the box to disable the latest news on the homepage.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
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
	'menu_order' => 4,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

 ?>
