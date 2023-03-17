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


// Fields destinados ao grupo de pessoas
add_action('cmb2_admin_init', 'cmb2_fields_contato_team');
function cmb2_fields_contato_team()
{  
  $cmb =  new_cmb2_box([
    'id' => 'contato_box_team',
    'title' => 'Equipe do Polo',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  $equipe = $cmb->add_field([
  'name'=>"Equipe",
  'id' =>'equipe',
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
$cmb->add_group_field($equipe,[
  'name'=>"Nome do servidor",
  'id' =>'people_name',
  'type' => 'text',
]);

// People function
$cmb->add_group_field($equipe,[
  'name'=>"Nome função",
  'id' =>'function_name',
  'type' => 'text',
]); 

// People email
$cmb->add_group_field($equipe,[
  'name'=>"E-mail da pessoa",
  'id' =>'people_email',
  'type' => 'text_email',
]); 
}



// phones and branch
add_action('cmb2_admin_init', 'cmb2_fields_contato_phone');
function cmb2_fields_contato_phone()
{  
  $phone_cmb2 =  new_cmb2_box([
    'id' => 'contato_box_phone',
    'title' => 'Telefone e Ramais do Polo',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  $phone = $phone_cmb2->add_field([
  // 'name'=>"Turno de atendimento POLO",
  'id' =>'phones',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Grupo de contato Telefonico {#}',
        'add_button' => 'Adicionar telefone',
        'remove_button' => 'Remover telefone',
        'sortable' => false,
  ]
]);

// area code
$phone_cmb2->add_group_field($phone,[
  'name'=>"Código de área",
  'id' =>'area_code',
  'type' => 'text',
]);

// phone
$phone_cmb2->add_group_field($phone,[
  'name'=>"Telefone",
  'id' =>'phone_number',
  'type' => 'text',
]);

// branch
$phone_cmb2->add_group_field($phone,[
  'name'=>"Ramal",
  'id' =>'branch_number',
  'type' => 'text',
]); 

}

























?>