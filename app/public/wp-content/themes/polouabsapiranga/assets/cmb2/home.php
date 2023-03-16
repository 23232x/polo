<?php

//########## CMB2 Settings ############
// CMB2 -> Fields Home - intro text
add_action('cmb2_admin_init', 'cmb2_fields_home');


// this functions creates a new cmb2 metabox fields
function cmb2_fields_home()
{
  $home_cmb2 =  new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Campos personalizados da Home',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ],
  ]);

  // now we can add new field inside metabox fields created above
  $home_cmb2->add_field([
    'name' => 'Frase pagina inicial',
    'id' => 'intro_text',
    'type' => 'textarea_small',
  ]);
}

//########## CMB2 -> REPETABLE - SWIPER #############
add_action('cmb2_admin_init', 'cmb2_fields_home_swiper');

function cmb2_fields_home_swiper()
{
  $swiper_cmb2 =  new_cmb2_box([
    'id' => 'home_box_swiper',
    'title' => 'Campos personalizados Slide',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ],
  ]);

  $slides = $swiper_cmb2->add_field([
  'name'=>"Slides",
  'id' =>'slides',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Slide {#}',
        'add_button' => 'Adicionar Slide',
        'remove_button' => 'Remover Slide',
        'sortable' => true,
  ]
]);

// add the title
$swiper_cmb2->add_group_field($slides,[
  'name'=>"Titulo",
  'id' =>'titulo',
  'type' => 'text',
]);

// add the subtitle
$swiper_cmb2->add_group_field($slides,[
  'name'=>"Subtitulo",
  'id' =>'subtitulo',
  'type' => 'text',
]); 

// add the description
$swiper_cmb2->add_group_field($slides,[
  'name'=>"Descrição",
  'id' =>'descricao',
  'type' => 'textarea_small',
]); 

// add the photo
$swiper_cmb2->add_group_field($slides,[
  'name'=>"Imagem",
  'id' =>'imagem',
  'type' => 'file',
]);  
}
?>


