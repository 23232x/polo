<!-- importa o header -->
<?php get_header(); ?>

<!-- faz o LOOP principal -->
<?php if (have_posts()) {
  while (have_posts()) {
    the_post(); ?>

    <h1 class="titulo"><?php the_title() ?></h1>

    <!-- mostra o conteúdo do site -->
    <main class="container container-index">
      <?php the_content();  ?>
    </main>

    <!-- fim do loope principal -->
<?php }
} ?>

<!-- importa o footer -->
<?php get_footer(); ?>