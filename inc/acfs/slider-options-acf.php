<?php

acf_add_local_field_group(array(
	'key' => 'group_5b040105872bf',
	'title' => 'Slider Options',
	'fields' => array(
		array(
			'key' => 'field_5b04010fa5157',
			'label' => 'Toggle Homepage Slider',
			'name' => 'toggle_slider',
			'type' => 'true_false',
			'instructions' => 'Tick the checkbox to enable the slider.
Untick the checkbox to disable the slider.',
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
