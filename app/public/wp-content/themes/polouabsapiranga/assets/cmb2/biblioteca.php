<!-- This contato.php file contains the metabox for the page  -->

<?php


// ########### BIBLIOTECAS UNIVERSITÁRIAS ################
add_action('cmb2_admin_init', 'cmb2_fields_biblioteca_title');
function cmb2_fields_biblioteca_title()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'title_biblioteca_box',
    'title' => 'TÍTULO DA PÁGINA',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-biblioteca.php',
    ],
  ]);


  $cmb2->add_field([
    'name' => 'Título página Biblioteca',
    'id' => 'title_library_page',
    'type' => 'text',
  ]);

$cmb2->add_field([
    'name' => 'Subtítulo',
    'id' => 'Subtitle_library_page',
    'type' => 'text',
  ]);
}

//Adiciona novo itens
add_action('cmb2_admin_init', 'cmb2_fields_bibli_universitarias_acervo');

function cmb2_fields_bibli_universitarias_acervo()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'acervo_gradu_box_item',
    'title' => 'BIBLIOTECAS UNIVERSITÁRIAS',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-biblioteca.php',
    ],
  ]);


  $cmb2->add_field([
    'name' => 'Título da seção',
    'id' => 'collection_title_library',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'subtítulo da seção',
    'id' => 'collection_subtitle_library',
    'type' => 'text',
  ]);


  $librarys = $cmb2->add_field([
  'name'=>'Nesta seção é possível adicionar novos links exernos ao acervo de bibliotecas digititais',
  'id' =>'librarys',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'item  {#}',
        'add_button' => 'Adicionar item',
        'remove_button' => 'Remover item ',
        'sortable' => true,
  ]
]);

$cmb2->add_group_field($librarys,[
  'name'=>'Nome do repositório',
  'id' =>'collection_item_title',
  'type' => 'text',
]);

$cmb2->add_group_field($librarys,[
    'name'=>'Link externo do repositório',
    'id' =>'collection_item_link',
    'type' => 'text',   
  ]); 
}




// ########### REPOSITÓRIOS INSTITUCIONAIS ################
add_action('cmb2_admin_init', 'cmb2_fields_repo');

function cmb2_fields_repo()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'repo_box_item',
    'title' => 'REPOSITÓRIOS INSTITUCIONAIS',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-biblioteca.php',
    ],
  ]);


  $cmb2->add_field([
    'name' => 'Título da seção',
    'id' => 'repo_title',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Subtítulo da seção',
    'id' => 'repo_subtitle',
    'type' => 'text',
  ]);


  $repos = $cmb2->add_field([
  'name'=>'Nesta seção é possível adicionar novos links exernos ao acervo de repositórios institucionais',
  'id' =>'repos',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'item  {#}',
        'add_button' => 'Adicionar item',
        'remove_button' => 'Remover item ',
        'sortable' => true,
  ]
]);

// Nome do respositorio
$cmb2->add_group_field($repos,[
  'name'=>'Título do repositório',
  'id' =>'repo_item_title',
  'type' => 'text',
]);

// Link externo do repositorio
$cmb2->add_group_field($repos,[
    'name'=>'Link externo do repositório',
    'id' =>'repo_item_link',
    'type' => 'text',   
  ]); 

}


// ########### BIBLIOTECAS DIGITAIS ################
add_action('cmb2_admin_init', 'cmb2_fields_digi_bibli');

function cmb2_fields_digi_bibli()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'bibli_digi_box_item',
    'title' => 'BIBLIOTECAS DIGITAIS',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-biblioteca.php',
    ],
  ]);


  $cmb2->add_field([
    'name' => 'Título da seção',
    'id' => 'digi_bible_title',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Subtítulo da seção',
    'id' => 'digi_bibli_subtitle',
    'type' => 'text',
  ]);


  $digi_biblis = $cmb2->add_field([
  'name'=>'Nesta seção é possível adicionar novos links exernos  de bibliotecas digitais.',
  'id' =>'digi_biblis',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'item  {#}',
        'add_button' => 'Adicionar item',
        'remove_button' => 'Remover item ',
        'sortable' => true,
  ]
]);

// Nome do respositorio
$cmb2->add_group_field($digi_biblis,[
  'name'=>'Título do repositório',
  'id' =>'digi_bibli_item_title',
  'type' => 'text',
]);

// Link externo do repositorio
$cmb2->add_group_field($digi_biblis,[
    'name'=>'Link externo do repositório',
    'id' =>'digi_bibli_item_link',
    'type' => 'text',   
  ]); 

}



// ########### PORTAL DE PERIÓDICOS ################
add_action('cmb2_admin_init', 'cmb2_fields_periodicos');

function cmb2_fields_periodicos()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'periodicos_box_item',
    'title' => 'PORTAL DE PERIÓDICOS',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-biblioteca.php',
    ],
  ]);


  $cmb2->add_field([
    'name' => 'Título da seção',
    'id' => 'periodico_title_page',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Subtítulo da seção',
    'id' => 'periodico_subtitle_page',
    'type' => 'text',
  ]);


  $peris = $cmb2->add_field([
  'name'=>'Nesta seção é possível adicionar novos links exernos de periódicos.',
  'id' =>'peris',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'item  {#}',
        'add_button' => 'Adicionar item',
        'remove_button' => 'Remover item ',
        'sortable' => true,
  ]
]);

// Nome do respositorio
$cmb2->add_group_field($peris,[
  'name'=>'Título do periódico',
  'id' =>'peri_item_title',
  'type' => 'text',
]);

// Link externo do repositorio
$cmb2->add_group_field($peris,[
    'name'=>'Link externo do periódico',
    'id' =>'peri_item_link',
    'type' => 'text',   
  ]); 

}



// ########### MATEMATICA ################
add_action('cmb2_admin_init', 'cmb2_fields_math');

function cmb2_fields_math()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'math_box_item',
    'title' => 'MATEMÁTICA',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-biblioteca.php',
    ],
  ]);

  $cmb2->add_field([
    'name' => 'Título da seção',
    'id' => 'math_title_section',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Subtítulo da seção',
    'id' => 'math_subtitle_section',
    'type' => 'text',
  ]);

  $maths = $cmb2->add_field([
  'name'=>'Nesta seção é possível adicionar novos links relacionados ao curso de matemática.',
  'id' =>'maths',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'item  {#}',
        'add_button' => 'Adicionar item',
        'remove_button' => 'Remover item ',
        'sortable' => true,
  ]
]);

$cmb2->add_group_field($maths,[
  'name'=>'Título do item',
  'id' =>'math_item_title',
  'type' => 'text',
]);

$cmb2->add_group_field($maths,[
    'name'=>'Link externo do item',
    'id' =>'math_item_link',
    'type' => 'text',   
  ]); 

}



// ########### FILOSOFIA ################
add_action('cmb2_admin_init', 'cmb2_fields_filo');

function cmb2_fields_filo()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'filo_box_item',
    'title' => 'FILOSOFIA',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-biblioteca.php',
    ],
  ]);

  $cmb2->add_field([
    'name' => 'Título da seção',
    'id' => 'filo_title_section',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Subtítulo da seção',
    'id' => 'filo_subtitle_section',
    'type' => 'text',
  ]);

  $filos = $cmb2->add_field([
  'name'=>'Nesta seção é possível adicionar novos links relacionados ao curso de filosofia.',
  'id' =>'filos',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'item  {#}',
        'add_button' => 'Adicionar item',
        'remove_button' => 'Remover item ',
        'sortable' => true,
  ]
]);

$cmb2->add_group_field($filos,[
  'name'=>'Título do item',
  'id' =>'filo_item_title',
  'type' => 'text',
]);

$cmb2->add_group_field($filos,[
    'name'=>'Link externo do item',
    'id' =>'filo_item_link',
    'type' => 'text',   
  ]); 
}


//############## CIÊNCIAS DA INFORMAÇÃO ####################
add_action('cmb2_admin_init', 'cmb2_fields_info');

function cmb2_fields_info()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'info_box_item',
    'title' => 'CIÊNCIAS DA INFORMAÇÃO',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-biblioteca.php',
    ],
  ]);

  $cmb2->add_field([
    'name' => 'Título da seção',
    'id' => 'info_title_section',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Subtítulo da seção',
    'id' => 'info_subtitle_section',
    'type' => 'text',
  ]);

  $infos = $cmb2->add_field([
  'name'=>'Nesta seção é possível adicionar novos links relacionados ao curso ciência da informação.',
  'id' =>'infos',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'item  {#}',
        'add_button' => 'Adicionar item',
        'remove_button' => 'Remover item ',
        'sortable' => true,
  ]
]);

$cmb2->add_group_field($infos,[
  'name'=>'Título do item',
  'id' =>'info_item_title',
  'type' => 'text',
]);

$cmb2->add_group_field($infos,[
    'name'=>'Link externo do item',
    'id' =>'info_item_link',
    'type' => 'text',   
  ]); 
}


//############ PEDAGOGIA ###############

add_action('cmb2_admin_init', 'cmb2_fields_peda');

function cmb2_fields_peda()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'peda_box_item',
    'title' => 'PEDAGOGIA',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-biblioteca.php',
    ],
  ]);

  $cmb2->add_field([
    'name' => 'Título da seção',
    'id' => 'peda_title_section',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Subtítulo da seção',
    'id' => 'peda_subtitle_section',
    'type' => 'text',
  ]);

  $pedagos = $cmb2->add_field([
  'name'=>'Nesta seção é possível adicionar novos links relacionados ao curso ciência da informação.',
  'id' =>'pedagos',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'item  {#}',
        'add_button' => 'Adicionar item',
        'remove_button' => 'Remover item ',
        'sortable' => true,
  ]
]);

$cmb2->add_group_field($pedagos,[
  'name'=>'Título do item',
  'id' =>'peda_item_title',
  'type' => 'text',
]);

$cmb2->add_group_field($pedagos,[
    'name'=>'Link externo do item',
    'id' =>'peda_item_link',
    'type' => 'text',   
  ]); 
}


//############ EDUCAÇÃO EM SAÚDE ############


add_action('cmb2_admin_init', 'cmb2_fields_saude');

function cmb2_fields_saude()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'saude_box_item',
    'title' => 'EDUCAÇÃO EM SAÚDE',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-biblioteca.php',
    ],
  ]);

  $cmb2->add_field([
    'name' => 'Título da seção',
    'id' => 'edu_title_section',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Subtítulo da seção',
    'id' => 'edu_subtitle_section',
    'type' => 'text',
  ]);

  $edus = $cmb2->add_field([
  'name'=>'Nesta seção é possível adicionar novos links relacionados ao curso de educação em saúde.',
  'id' =>'edus',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'item  {#}',
        'add_button' => 'Adicionar item',
        'remove_button' => 'Remover item ',
        'sortable' => true,
  ]
]);

$cmb2->add_group_field($edus,[
  'name'=>'Título do item',
  'id' =>'edu_item_title',
  'type' => 'text',
]);

$cmb2->add_group_field($edus,[
    'name'=>'Link externo do item',
    'id' =>'edu_item_link',
    'type' => 'text',   
  ]); 
}


//###### RECURSOS EDUCACIONAIS ABERTOS ###########
add_action('cmb2_admin_init', 'cmb2_fields_recu_edu');

function cmb2_fields_recu_edu()
{
  $cmb2 =  new_cmb2_box([
    'id' => 'recu_edu_box_item',
    'title' => 'RECURSOS EDUCACIONAIS ABERTOS',
    'object_types' => ['page'],
    'show_on' => [
        'key' => 'page-template',
        'value' => 'page-biblioteca.php',
    ],
  ]);

  $cmb2->add_field([
    'name' => 'Título da seção',
    'id' => 'recu_edu_title_section',
    'type' => 'text',
  ]);

  $cmb2->add_field([
    'name' => 'Subtítulo da seção',
    'id' => 'recu_edu_subtitle_section',
    'type' => 'text',
  ]);

  $recu_edus = $cmb2->add_field([
  'name'=>'Nesta seção é possível adicionar novos links relacionados ao curso de Recursos Educacionais Abertos',
  'id' =>'recu_edus',
  'type' => 'group',
  'repeatable' => true,
  'options' => [
        'group_title' => 'item  {#}',
        'add_button' => 'Adicionar item',
        'remove_button' => 'Remover item ',
        'sortable' => true,
  ]
]);

$cmb2->add_group_field($recu_edus,[
  'name'=>'Título do item',
  'id' =>'recu_edu_item_title',
  'type' => 'text',
]);

$cmb2->add_group_field($recu_edus,[
    'name'=>'Link externo do item',
    'id' =>'recu_edu_item_link',
    'type' => 'text',   
  ]); 
}









