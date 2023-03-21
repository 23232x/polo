<!-- 
Este arquivo 'cursos.php', carrega todos os campos personalizados da página 'page-cursos.php'
-->

<?php

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
    'name' => 'campo de email do subtitulo',
    'id' => 'email_subtitle_page_cursos',
    'type' => 'text',
  ]);
}

// ############## CAMPOS CURSOS DE GRADUAÇÃO: ################
add_action('cmb2_admin_init', 'cmb2_fields_gradu_title');

function cmb2_fields_gradu_title()
{
  $cmb =  new_cmb2_box([
    'id' => 'gradu_box',
    'title' => 'SEÇÃO - GRADUAÇÃO.',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-cursos.php',
    ],
  ]);

  // Título
  $cmb->add_field([
    'name' => 'Título',
    'id' => 'title_gradu',
    'type' => 'text',
  ]);

//Subtitulo 
  $cmb->add_field([
    'name' => 'Subitítulo',
    'id' => 'subtitle_gradu',
    'type' => 'text',
  ]);

  //Email subtitulo 
//   $cmb->add_field([
//     'name' => 'campo de email do subtitulo',
//     'id' => 'email_subtitle_page_cursos',
//     'type' => 'text',
//   ]);
}


//########## ADICIONA UM NOVO CURSO NA SEÇÃO GRADUAÇÃO ############
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

// Nome do curso
$cmb->add_group_field($cursos_gradu,[
  'name'=>'Nome do Curso',
  'id' =>'course_gradu_name',
  'type' => 'text',
]);

// status do curso 
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

// Link externo de graduação do curso
$cmb->add_group_field($cursos_gradu,[
    'name'=>"Link externo do curso de graduação",
    'id' =>'course_gradu_link',
    'type' => 'text',   
  ]); 

}


// ############## CAMPOS CURSOS DE PÓS-GRADUAÇÃO: ################

add_action('cmb2_admin_init', 'cmb2_fields_cursos_pos');

function cmb2_fields_cursos_pos()
{
  $cmb =  new_cmb2_box([
    'id' => 'cursos_pos_box',
    'title' => 'SEÇÃO PÓS-GRADUAÇÃO',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-cursos.php',
    ],
  ]);

  // Título
  $cmb->add_field([
    'name' => 'Título seção pós-graduação',
    'id' => 'title_section_pos',
    'type' => 'text',
  ]);

//Subtitulo 
  $cmb->add_field([
    'name' => 'Subtítulo seção pós-graduação',
    'id' => 'subtitle_section_pos',
    'type' => 'text',
  ]);  
}


//########## ADICIONA UM NOVO CURSO DE PÓSGRADUAÇÃO ############
add_action('cmb2_admin_init', 'cmb2_fields_pos_item');

function cmb2_fields_pos_item()
{
  $cmb =  new_cmb2_box([
    'id' => 'pos_box_item',
    'title' => 'CURSOS DE POS-GRADUAÇÃO',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-cursos.php',
    ],
  ]);

  $cursos_pos = $cmb->add_field([
'name'=>'Nesta seção você pode adicionar e remover cursos de Pós-graduação.',
  'id' =>'cursos_pos',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Curso de pós-graduação {#}',
        'add_button' => 'Adicionar curso',
        'remove_button' => 'Remover curso',
        'sortable' => true,
  ]
]);

// Pergunta
$cmb->add_group_field($cursos_pos,[
  'name'=>'Nome do Curso',
  'id' =>'course_pos_name',
  'type' => 'text',
]);

// status do curso / previsto, em andamento, ou encerrado.
$cmb->add_group_field($cursos_pos,[
  'name'=>"Status do curso",
  'id' =>'course_pos_state',
  'type' => 'select',
  'show_option_none' => false,
  'default'          => 'custom',
  'options'          => array(
      'standard' => __( 'Encerrado', 'cmb2' ),
      'custom'   => __( 'Em andamento', 'cmb2' ),
      'none'     => __( 'Concluído', 'cmb2' )
  ),
]); 

// Link externo de graduação do curso
$cmb->add_group_field($cursos_pos,[
    'name'=>"Link externo do curso de graduação",
    'id' =>'course_pos_link',
    'type' => 'text',   
  ]); 
}




// ##########CURSOS TÉCNICOS#########
add_action('cmb2_admin_init', 'cmb2_fields_cursos_tec');

function cmb2_fields_cursos_tec()
{
  $cmb =  new_cmb2_box([
    'id' => 'cursos_tec_box',
    'title' => 'SEÇÃO TECNICOS',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-cursos.php',
    ],
  ]);

  // Título
  $cmb->add_field([
    'name' => 'Título seção Técnicos',
    'id' => 'title_section_tec',
    'type' => 'text',
  ]);

//Subtitulo 
  $cmb->add_field([
    'name' => 'Subtítulo seção Técnicos',
    'id' => 'subtitle_section_tec',
    'type' => 'text',
  ]);  
}


// Adicionar novo curso técnico
add_action('cmb2_admin_init', 'cmb2_fields_tec_item');

function cmb2_fields_tec_item()
{
  $cmb =  new_cmb2_box([
    'id' => 'tec_box_item',
    'title' => 'CURSOS TÉCNICOS',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-cursos.php',
    ],
  ]);

  $cursos_tec = $cmb->add_field([
'name'=>'Nesta seção você pode adicionar e remover cursos técnicos.',
  'id' =>'cursos_tec',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Cursos técnicos {#}',
        'add_button' => 'Adicionar curso',
        'remove_button' => 'Remover curso',
        'sortable' => true,
  ]
]);

// Pergunta
$cmb->add_group_field($cursos_tec,[
  'name'=>'Nome do Curso',
  'id' =>'course_tec_name',
  'type' => 'text',
]);

// status do curso / previsto, em andamento, ou encerrado.
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

// Link externo de graduação do curso
$cmb->add_group_field($cursos_tec,[
    'name'=>"Link externo do curso",
    'id' =>'course_tec_link',
    'type' => 'text',   
  ]); 
}


// ########## CURSOS FIC #########
add_action('cmb2_admin_init', 'cmb2_fields_cursos_fic');

function cmb2_fields_cursos_fic()
{
  $cmb =  new_cmb2_box([
    'id' => 'cursos_fic_box',
    'title' => 'SEÇÃO CURSOS FIC',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-cursos.php',
    ],
  ]);

  //TÍTULO DA SEÇÃO
  $cmb->add_field([
    'name' => 'Título seção cursos FIC',
    'id' => 'title_section_fic',
    'type' => 'text',
  ]);

//SUBTITULO DA SEÇÃO
  $cmb->add_field([
    'name' => 'Subtítulo seção cursos FIC',
    'id' => 'subtitle_section_fic',
    'type' => 'text',
  ]);  
}


// Adicionar novo curso técnico
add_action('cmb2_admin_init', 'cmb2_fields_fic_item');

function cmb2_fields_fic_item()
{
  $cmb =  new_cmb2_box([
    'id' => 'fic_box_item',
    'title' => 'CURSOS FIC',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-cursos.php',
    ],
  ]);

  $cursos_fic = $cmb->add_field([
'name'=>'Nesta seção você pode adicionar e remover cursos FIC.',
  'id' =>'cursos_fic',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Curso FIC {#}',
        'add_button' => 'Adicionar curso',
        'remove_button' => 'Remover curso',
        'sortable' => true,
  ]
]);

// Nome do curso
$cmb->add_group_field($cursos_fic,[
  'name'=>'Nome do Curso',
  'id' =>'course_fic_name',
  'type' => 'text',
]);

// status do curso 
$cmb->add_group_field($cursos_fic,[
  'name'=>"Status do curso",
  'id' =>'course_fic_state',
  'type' => 'select',
  'show_option_none' => false,
  'default'          => 'custom',
  'options'          => array(
      'standard' => __( 'Encerrado', 'cmb2' ),
      'custom'   => __( 'Em andamento', 'cmb2' ),
      'none'     => __( 'Concluído', 'cmb2' )
  ),
]); 

// Link externo de graduação do curso
$cmb->add_group_field($cursos_fic,[
    'name'=>"Link externo do curso",
    'id' =>'course_fic_link',
    'type' => 'text',   
  ]); 
}















?>