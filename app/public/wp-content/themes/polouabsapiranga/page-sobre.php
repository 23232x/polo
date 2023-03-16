<?php
// Template Name:Sobre
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- conteúdo da página vai aqui -->

<section class="section container">
  <!-- breadcrumb -->
  <div class="breadcrumb"><?php get_breadcrumb(); ?></div>

  <!-- import the social medias template -->
  <?php get_template_part('template-parts/social-medias'); ?>

  <!-- tittle -->
  <div class="title-section">
    <h4><?php the_cmb2field('title_sobre'); ?></h4>
    <ul>
      <li>
        <span>
          <?php the_cmb2field('subtitle_sobre');?>
          <a href="/polouabsapiranga/faq"
            target="_blank"
            rel="noopener noreferrer"
            >FAQ</a>.
        </span>
      </li>
    </ul>
  </div>

  <section class="main-page sobre">
    <div class="text-wrapper">
      <p>
        <?php the_cmb2field('text_about');?>
      </p>
    </div>
  </section>

  <div class="search-on-page">
    <?php get_search_form(); ?>
  </div>
</section>

<?php endwhile;
else : endif ?>
<?php get_footer(); ?>
