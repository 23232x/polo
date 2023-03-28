<!-- 
Este arquivo 'cursos.php', carrega todos os campos personalizados da página 'page-cursos.php'
-->

<?php
// #########################################################
// ####### TÍTULO PRINCIPAL DA PÁGINA CURSOS  ##############
// #########################################################

add_action('cmb2_admin_init', 'cmb2_fields_cursos');

function cmb2_fields_cursos()
{
  $cmb =  new_cmb2_box([
    'id' => 'cursos_box',
    'title' => 'TITULO PRINCIPAL DA PÁGINA',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-cursos.php',
    ],
  ]);

  // Título
  $cmb->add_field([
    'name' => 'Título página de cursos',
    'id' => 'title_page_cursos',
    'type' => 'text',
  ]);

//Subtitulo 
  $cmb->add_field([
    'name' => 'Subtítulo página cursos',
    'id' => 'subtitle_page_cursos',
    'type' => 'text',
  ]);

  //Email subtitulo 
  $cmb->add_field([
    'name' => 'Campo de email do subtitulo',
    'id' => 'email_subtitle_page_cursos',
    'type' => 'text',
  ]);
}
// ###################################################
// ############ CMB2 - PÓS-GRADUAÇÃO: ################
// ###################################################
add_action('cmb2_admin_init', 'cmb2_fields_pos_item');

function cmb2_fields_pos_item()
{
  $cmb =  new_cmb2_box([
    'id' => 'pos_box_item',
    'title' => 'CURSOS DE PÓS-GRADUAÇÃO',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-cursos.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título',
    'id' => 'title_pos_section',
    'type' => 'text',
  ]);


  $cmb->add_field([
    'name' => 'Subitítulo',
    'id' => 'subtitle_pos_section',
    'type' => 'text',
  ]);

  $cursos_pos = $cmb->add_field([
  'name'=>'Nesta seção é possível adicionar novos cursos de pós-graduação.',
  'id' =>'cursos_pos',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Curso  {#}',
        'add_button' => 'Adicionar curso',
        'remove_button' => 'Remover curso',
        'sortable' => true,
  ]
]);

// nome curso
$cmb->add_group_field($cursos_pos,[
  'name'=>'Nome do Curso',
  'id' =>'course_pos_name',
  'type' => 'text',
]);

// status curso 
$cmb->add_group_field($cursos_pos,[
  'name'=>"Status do curso",
  'id' =>'course_pos_state',
  'type' => 'select',
  'show_option_none' => false,
  'default'          => 'custom',
  'options'          => array(
      'standard' => __( 'Encerrado', 'cmb' ),
      'custom'   => __( 'Em andamento', 'cmb' ),
      'none'     => __( 'Concluído', 'cmb' ),
  ),
]); 

// Link externo curso
$cmb->add_group_field($cursos_pos,[
    'name'=>"Link externo do curso de graduação",
    'id' =>'course_pos_link',
    'type' => 'text',   
  ]);
}


//#############################################
//############# CMB2 - GRADUAÇÃO ##############
//#############################################
add_action('cmb2_admin_init', 'cmb2_fields_gradu_item');

function cmb2_fields_gradu_item()
{
  $cmb =  new_cmb2_box([
    'id' => 'gradu_box_item',
    'title' => 'CURSOS DE GRADUAÇÃO',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-cursos.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título',
    'id' => 'title_gradu_section',
    'type' => 'text',
  ]);


  $cmb->add_field([
    'name' => 'Subitítulo',
    'id' => 'subtitle_gradu_section',
    'type' => 'text',
  ]);

  $cursos_gradu = $cmb->add_field([
  'name'=>'Nesta seção é possível adicionar novos cursos de graduação.',
  'id' =>'cursos_gradu',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Curso  {#}',
        'add_button' => 'Adicionar curso',
        'remove_button' => 'Remover curso',
        'sortable' => true,
  ]
]);

// nome curso
$cmb->add_group_field($cursos_gradu,[
  'name'=>'Nome do Curso',
  'id' =>'course_gradu_name',
  'type' => 'text',
]);

// status curso 
$cmb->add_group_field($cursos_gradu,[
  'name'=>"Status do curso",
  'id' =>'course_gradu_state',
  'type' => 'select',
  'show_option_none' => false,
  'default'          => 'custom',
  'options'          => array(
      'standard' => __( 'Encerrado', 'cmb2' ),
      'custom'   => __( 'Em andamento', 'cmb2' ),
      'none'     => __( 'Concluído', 'cmb2' )
  ),
]); 

// Link externo curso
$cmb->add_group_field($cursos_gradu,[
    'name'=>"Link externo do curso de graduação",
    'id' =>'course_gradu_link',
    'type' => 'text',   
  ]); 
}





// ##########################################
// ############ CMB2 -TÉCNICOS ##############
// ##########################################
add_action('cmb2_admin_init', 'cmb2_fields_tec_item');

function cmb2_fields_tec_item()
{
  $cmb =  new_cmb2_box([
    'id' => 'tec_box_item',
    'title' => 'CURSOS TECNICOS',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-cursos.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título',
    'id' => 'title_tec_section',
    'type' => 'text',
  ]);


  $cmb->add_field([
    'name' => 'Subitítulo',
    'id' => 'subtitle_tec_section',
    'type' => 'text',
  ]);

  $cursos_tec = $cmb->add_field([
  'name'=>'Nesta seção é possível adicionar novos cursos tecnicos.',
  'id' =>'cursos_tec',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Curso  {#}',
        'add_button' => 'Adicionar curso',
        'remove_button' => 'Remover curso',
        'sortable' => true,
  ]
]);

// nome curso
$cmb->add_group_field($cursos_tec,[
  'name'=>'Nome do Curso',
  'id' =>'course_tec_name',
  'type' => 'text',
]);

// status curso 
$cmb->add_group_field($cursos_tec,[
  'name'=>"Status do curso",
  'id' =>'course_tec_state',
  'type' => 'select',
  'show_option_none' => false,
  'default'          => 'custom',
  'options'          => array(
      'standard' => __( 'Encerrado', 'cmb2' ),
      'custom'   => __( 'Em andamento', 'cmb2' ),
      'none'     => __( 'Concluído', 'cmb2' )
  ),
]); 

// Link externo curso
$cmb->add_group_field($cursos_tec,[
    'name'=>"Link externo do curso de graduação",
    'id' =>'course_tec_link',
    'type' => 'text',   
  ]); 
}

?>