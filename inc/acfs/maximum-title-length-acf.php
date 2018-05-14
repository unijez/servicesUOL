<?php

acf_add_local_field_group(array(
	'key' => 'group_5af96d624b358',
	'title' => 'Maximum Slider Title Length',
	'fields' => array(
		array(
			'key' => 'field_5af96d70ec8bd',
			'label' => 'Maximum Length:',
			'name' => 'maximum_length',
			'type' => 'number',
			'instructions' => 'Enter the maximum length, and it will concatonate an elipses at the end if the title is too long',
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
			'min' => '',
			'max' => '',
			'step' => '',
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

 ?>
