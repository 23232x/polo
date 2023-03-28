<!-- 
Este arquivo 'editais.php', carrega todos os campos personalizados da página 'page-editais.php'
-->
<?php

//########Esta função adiciona titulo e subtitulo na página contato######
add_action('cmb2_admin_init', 'cmb2_fields_editais');

function cmb2_fields_editais()
{
  $cmb =  new_cmb2_box([
    'id' => 'editais_box',
    'title' => 'TÍTULO SUBTITULO PAGINA EDITAIS',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-editais.php',
    ],
  ]);

  // Título
  $cmb->add_field([
    'name' => 'Título página editais',
    'id' => 'contact_title',
    'type' => 'text',
  ]);

//Subtitulo 
  $cmb->add_field([
    'name' => 'Subtítulo página editais',
    'id' => 'contact_subtitle',
    'type' => 'text',
  ]);
}


####Esta função cria o repeat fiel para cada novo idital.
add_action('cmb2_admin_init', 'cmb2_fields_edital_item');

function cmb2_fields_edital_item()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'edital_box_item',
    'title' => 'ADICIONAR NOVO EDITAL',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-editais.php',
      'sortable' => false,
      
    ],
  ]);

  $editais = $cmb2->add_field([
//   'name'=>"Edital",
  'id' =>'editais',
  'type' => 'group',
  'repeatable' => true, 
  'options' => [
        'group_title' => 'Edital {#}',
        'add_button' => 'Adicionar edital',
        'remove_button' => 'Remover edital',
        'sortable' => true,
        
      ]
]);

// Título do edital
$cmb2->add_group_field($editais,[
  'name'=>"Titulo do Edital",
  'id' =>'edital_title',
  'type' => 'text',
  
]);

// Descrição do edital
$cmb2->add_group_field($editais,[
  'name'=>"Descrição do edital",
  'id' =>'edital_description',
  'type' => 'wysiwyg',
  
]); 

// Data final de inscrição
$cmb2->add_group_field($editais,[
  'name'=>"Data de incrição inicial",
  'id' =>'edital_date_start',
  'type' => 'text_date',
  
]); 

// Data final de inscrição
$cmb2->add_group_field($editais,[
  'name'=>"Data de incrição final",
  'id' =>'edital_date_end',
  'type' => 'text_date',  
]);

// link para mais informacoes
$cmb2->add_group_field($editais,[
  'name'=>"URL mais informações",
  'id' =>'more_info',
  'type' => 'text',
  
]);
}
?>