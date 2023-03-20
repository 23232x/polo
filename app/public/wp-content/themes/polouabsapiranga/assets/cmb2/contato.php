<!-- This contato.php file contains the metabox for the page  -->

<?php


// page title
add_action('cmb2_admin_init', 'cmb2_fields_contato_title');
function cmb2_fields_contato_title()
{
  $contato_cmb2 =  new_cmb2_box([
    'id' => 'title_contato_box',
    'title' => 'Título inicial da página contato do Polo',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  // now, we can add new field inside metabox fields created above
  $contato_cmb2->add_field([
    'name' => 'Título página contato',
    'id' => 'title_contact_page',
    'type' => 'text',
  ]);

$contato_cmb2->add_field([
    'name' => 'Subtítulo página contato',
    'id' => 'subtitle_contact_page',
    'type' => 'text',
  ]);
}


// POLO address
add_action('cmb2_admin_init', 'cmb2_fields_contato_address');
function cmb2_fields_contato_address()
{
  $address_cmb2 =  new_cmb2_box([
    'id' => 'address_box',
    'title' => 'Endereço do Polo',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  // now, we can add new field inside metabox fields created above
  $address_cmb2->add_field([
    'name' => 'Rua',
    'id' => 'rua',
    'type' => 'text',
  ]);

  $address_cmb2->add_field([
    'name' => 'Número',
    'id' => 'numero',
    'type' => 'text',
  ]);

  $address_cmb2->add_field([
    'name' => 'Bairro',
    'id' => 'bairro',
    'type' => 'text',
  ]); 

  $address_cmb2->add_field([
    'name' => 'Cidade',
    'id' => 'cidade',
    'type' => 'text',
  ]);

  $address_cmb2->add_field([
    'name' => 'UF',
    'id' => 'uf',
    'type' => 'text',
  ]);

  $address_cmb2->add_field([
    'name' => 'CEP',
    'id' => 'cep',
    'type' => 'text',
  ]); 
 
}

// Horários de atendimento
add_action('cmb2_admin_init', 'cmb2_fields_contato_opening_hours');
function cmb2_fields_contato_opening_hours()
{  
  $opening_cmb2 =  new_cmb2_box([
    'id' => 'contato_box_opening',
    'title' => 'Horários e turnos de atendimento do Polo',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  $opening = $opening_cmb2->add_field([
  // 'name'=>"Turno de atendimento POLO",
  'id' =>'opening',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Turno {#}',
        'add_button' => 'Adicionar Turno',
        'remove_button' => 'Remover Turno',
        'sortable' => false,
  ]
]);

// shift
$opening_cmb2->add_group_field($opening,[
  'name'=>"Turno",
  'id' =>'turno',
  'type' => 'text',
]);

// open from
$opening_cmb2->add_group_field($opening,[
  'name'=>"Horário inicial",
  'id' =>'initial_hour',
  'type' => 'text',
]); 

// open until
$opening_cmb2->add_group_field($opening,[
  'name'=>"Horário final",
  'id' =>'final_hour',
  'type' => 'text',
]); 

// days of the week
$opening_cmb2->add_group_field($opening,[
  'name'=>"Dias de atendimento",
  'id' =>'service_days',
  'type' => 'text',
]); 

}

//###### Fields grupo de pessoas ###########
add_action('cmb2_admin_init', 'cmb2_fields_contato_team');
function cmb2_fields_contato_team()
{  
  $cmb_phone =  new_cmb2_box([
    'id' => 'contato_box_team',
    'title' => 'Equipe do Polo',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  $equipes = $cmb_phone->add_field([
  'name'=>"Equipe",
  'id' =>'equipes',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Equipe {#}',
        'add_button' => 'Adicionar pessoa',
        'remove_button' => 'Remover pessoa',
        'sortable' => false,
  ]
]);

// People name
$cmb_phone->add_group_field($equipes,[
  'name'=>"Nome do servidor",
  'id' =>'people_name',
  'type' => 'text',
]);

// People function
$cmb_phone->add_group_field($equipes,[
  'name'=>"Nome função",
  'id' =>'function_name',
  'type' => 'text',
]); 

// People email
$cmb_phone->add_group_field($equipes,[
  'name'=>"E-mail da pessoa",
  'id' =>'people_email',
  'type' => 'text_email',
]); 
}






//############# TELEFONES, RAMAIS, CÓDIGO DE ÁREA #############
add_action('cmb2_admin_init', 'cmb2_fields_contato_telefone');
// this functions creates a new cmb2 metabox fields
function cmb2_fields_contato_telefone()
{
  $cmb =  new_cmb2_box([
    'id' => 'telefone_email',
    'title' => 'Telefone e email página contato',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  //codigo de área
  $cmb->add_field([
    'name' => 'código de área',
    'id' => 'codigo_area',
    'type' => 'text',
  ]);
  
  // telefone
  $cmb->add_field([
    'name' => 'Telefone',
    'id' => 'telefone',
    'type' => 'text',
  ]);

  // ramal
  $cmb->add_field([
    'name' => 'Ramal',
    'id' => 'ramal',
    'type' => 'text',
  ]);

  //email 
  $cmb->add_field([
    'name' => 'E-mail',
    'id' => 'email',
    'type' => 'text',
  ]);




}






















?>