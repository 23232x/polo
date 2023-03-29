<?php
/*
Template Name: 404
*/
?>


<?php
get_header(); ?>


<section class="section container">

<div class="section container">
      <!-- breadcrumb -->
      <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

      <!-- import the social medias template -->
      <?php get_template_part('template-parts/social-medias'); ?>


      <!-- tittle -->
      <div class="title-section">
        <h4><?php the_cmb2field('title_page_faq'); ?></h4>
        <ul>
          <li>
            <span><?php the_cmb2field('subtitle_page_faq'); ?></span>
          </li>
        </ul>
      </div>
</div>

    <div class="title-section e404">
        <h4 class="page-title">
            <?php _e('404 Página não encontrada.', 'Text Domain'); ?>
        </h4>
        <ul>
            <li>
                <span>
                    <?php _e('Parece que nada foi encontrado neste local. Talvez tente uma pesquisa?', 'Text Domain'); ?>
                </span>
            </li>

            <li>
                <?php get_search_form(); ?>
            </li>
        </ul>
    </div>

















</section>



<?php get_footer(); ?>