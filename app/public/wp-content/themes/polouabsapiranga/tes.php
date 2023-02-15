<?php
// Template Name: Tes
?>


<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <h1>ola</h1>



<?php
    }
}
?>