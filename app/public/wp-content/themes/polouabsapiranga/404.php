<?php
/*
Template Name: 404
*/
?>


<?php
get_header(); ?>


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