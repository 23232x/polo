<?php
// Template Name: politicas-de-privacidade
?>

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>


        <h1>Politicas de provacidade</h1>


<?php
    }
}
?>


<?php get_footer(); ?>