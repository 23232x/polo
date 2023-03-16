 <!-- ################################################# -->
<!-- // #### customized functions to get cmb2 fields #### -->
<!-- // ################################################# -->

<?php
function get_cmb2field($key, $page_id = 0)
{
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}

function the_cmb2field($key, $page_id = 0)
{
  echo get_cmb2field($key, $page_id);
}

// Carrega os campos personalizados do CMB2.
require_once get_template_directory() . '/assets/cmb2/home.php';
require_once get_template_directory() . '/assets/cmb2/sobre.php';
require_once get_template_directory() . '/assets/cmb2/cursos.php';
?>