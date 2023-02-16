<?php
// Template Name: Cursos Previstos
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- conteúdo da página vai aqui -->


        <section class="section container">

            <!-- import the social medias template -->
            <?php
            get_template_part('template-parts/social-medias');
            ?>

            <!-- tittle -->
            <div class="title-section">
                <h4><?php the_field('titulo_cursos_previstos'); ?></h4>
                <ul>
                    <li>
                        <span><?php the_field('subtitulo_cursos_previstos'); ?></span>

                    </li>
                </ul>
            </div>

            <div class="contend-section">

                <p class="text wrapper">
                    <?php the_field('texto_sobre'); ?>
                </p>
            </div>


        </section>



<?php endwhile;
else : endif ?>
<?php get_footer(); ?>