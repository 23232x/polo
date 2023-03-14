<?php get_header();
?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <h1>Resultado de pesquisas</h1>



<?php
    }
} ?>

<?php get_footer(); ?>