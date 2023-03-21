<!-- Este arquivo 'faq.php', carrega todos os campos personalizados da página 'page-faq.php' -->

<?php

add_action('cmb2_admin_init', 'cmb2_fields_faq');

function cmb2_fields_faq()
{
  $cmb =  new_cmb2_box([
    'id' => 'faq_box',
    'title' => 'TITULO PRINCIPAL DA PÁGINA FAQ',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-faq.php',
    ],
  ]);

  // Título
  $cmb->add_field([
    'name' => 'Título página FAQ',
    'id' => 'title_page_faq',
    'type' => 'text',
  ]);

//Subtitulo 
  $cmb->add_field([
    'name' => 'Subtítulo página FAQ',
    'id' => 'subtitle_page_faq',
    'type' => 'text',
  ]);

  //Email subtitulo 
  $cmb->add_field([
    'name' => 'campo de email do subtitulo',
    'id' => 'email_subtitle_page_FAQ',
    'type' => 'text',
  ]);
}

####Esta função cria o repeat fiel para cada nova FAQ.
add_action('cmb2_admin_init', 'cmb2_fields_faq_item');

function cmb2_fields_faq_item()
{
  $cmb =  new_cmb2_box([
    'id' => 'faq_box_item',
    'title' => 'FAQ - PERGUNTAS E RESPOSTAS',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-faq.php',
    ],
  ]);

  $faqs = $cmb->add_field([
//   'name'=>'Adicione perguntas e respostas nesta seção',
  'id' =>'faqs',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'Pergunta {#}',
        'add_button' => 'Adicionar Pergunta',
        'remove_button' => 'Remover Pergunta',
        'sortable' => true,
  ]
]);

// Pergunta
$cmb->add_group_field($faqs,[
  'name'=>"Pergunta",
  'id' =>'faq_question',
  'type' => 'text',
]);

// Descrição do edital
$cmb->add_group_field($faqs,[
  'name'=>"Resposta",
  'id' =>'faq_answer',
  'type' => 'wysiwyg',
]); 
}

?>