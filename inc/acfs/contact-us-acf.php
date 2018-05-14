<?php

acf_add_local_field_group(array(
'key' => 'group_5ae6f5b5daaac',
'title' => 'Contact Us',
'fields' => array(
array(
'key' => 'field_5ae6f5bbbfdcc',
'label' => 'Address',
'name' => 'address',
'type' => 'textarea',
'instructions' => 'Enter the address, including the building name

e.g. Charlotte Scott Building
University of Lincoln
Brayford Pool
Lincoln
LN6 7DH',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
  'width' => '',
  'class' => '',
  'id' => '',
),
'default_value' => '',
'placeholder' => '',
'maxlength' => '',
'rows' => '',
'new_lines' => 'br',
),
array(
'key' => 'field_5ae6f61ae1e29',
'label' => 'Telephone Number',
'name' => 'telephone_number',
'type' => 'text',
'instructions' => 'Enter the telephone number

e.g. 01522 88 6777',
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
array(
'key' => 'field_5ae6f65ae1e2a',
'label' => 'E-mail',
'name' => 'e-mail',
'type' => 'email',
'instructions' => 'Enter your e-mail address

e.g. estates@lincoln.ac.uk',
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
),
),
'location' => array(
array(
array(
  'param' => 'options_page',
  'operator' => '==',
  'value' => 'contact-details-settings',
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
