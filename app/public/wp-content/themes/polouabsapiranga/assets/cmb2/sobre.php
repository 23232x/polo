<?php
// PAGE SOBRE
// CMB2 -> Fields Home - intro text
add_action('cmb2_admin_init', 'cmb2_fields_sobre');


// this functions creates a new cmb2 metabox fields
function cmb2_fields_sobre()
{
  $home_cmb2 =  new_cmb2_box([
    'id' => 'sobre_box',
    'title' => 'Campos personalizados da página SOBRE',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-sobre.php',
    ],
  ]);

    $home_cmb2->add_field([
    'name' => 'Título página sobre',
    'id' => 'title_sobre',
    'type' => 'text',
  ]);

  $home_cmb2->add_field([
    'name' => 'Subtítulo página sobre',
    'id' => 'subtitle_sobre',
    'type' => 'text',
  ]);

  $home_cmb2->add_field([
    'name' => 'Texto sobre o POLO UAB',
    'id' => 'text_about',
    'type' => 'wysiwyg',
  ]);
}
?>