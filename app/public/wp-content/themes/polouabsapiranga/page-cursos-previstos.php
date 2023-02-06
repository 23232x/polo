<?php
// Template Name: Cursos Previstos
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- conteúdo da página vai aqui -->


        <section class="section container">

            <!-- all subpages contains this section socials icon on the top page -->
            <div class="social-medias-top-page">

                <!-- Social medias -->
                <ul>
                    <!-- facebook -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/face.svg" alt="Facebook Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- instagram -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/insta.svg" alt="Instagram Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- youtube -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/youtube.svg" alt="Youtube Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- whatsapp -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/whats.svg" alt="WhatsApp Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- email -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/email.svg" alt="E-mail Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- print -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/print.svg" alt=" Versão impressa da página">
                        </a>
                    </li>





                </ul>
            </div>

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