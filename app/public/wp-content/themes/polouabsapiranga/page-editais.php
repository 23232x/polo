<?php
// Template Name: Editais
?>



<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <section class="section container">

                        <!-- breadcrumb -->
                        <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

                        <!-- import the social medias template -->
                        <?php get_template_part('template-parts/social-medias'); ?>

                        <!-- tittle -->
                        <div class="title-section">
                                <h4><?php the_field('titulo_sobre'); ?></h4>
                                <ul>
                                        <li>
                                                <span><?php the_field('subtitulo_sobre'); ?></span>

                                        </li>
                                </ul>
                        </div>


                        <div class="contend-section">

                                <div class="text-wrapper">
                                        <?php the_field('texto_sobre'); ?>
                                </div>
                        </div>


                        <div class="search-on-page">
                                <?php get_search_form(); ?>
                        </div>

                </section>




<?php endwhile;
else : endif ?>
<?php get_footer(); ?>