<?php //Template Name: Blog
?>



<?php get_header(); ?>



<?php if (have_posts()) {
    while (have_posts()) {
        the_post();  ?>





<?php }
} ?>
    