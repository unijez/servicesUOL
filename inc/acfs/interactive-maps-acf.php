<?php

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


 ?>
