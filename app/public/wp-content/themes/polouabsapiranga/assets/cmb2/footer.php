<?php


add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home()
{
  $home_cmb2 =  new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Campos personalizados da Home',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'footer.php',
    ],
  ]);

  // now we can add new field inside metabox fields created above
  $home_cmb2->add_field([
    'name' => 'Frase pagina inicial',
    'id' => 'intro_text',
    'type' => 'textarea_small',
  ]);
}


?>