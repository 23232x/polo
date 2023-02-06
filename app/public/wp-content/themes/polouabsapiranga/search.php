<?php
// Template Name: search-result
?>


<!-- 
how to display wordpress search results.
https://stackoverflow.com/questions/14802498/how-to-display-wordpress-search-results
 -->



<!-- import the header template -->
<?php get_header(); ?>

<section class="section container search">

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




    <div class="title-section flex">

        <?php
        $s = get_search_query();
        $args = array(
            's' => $s
        );

        // The Query
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            // _e("<h4 class='page-title'>Resultados da pesquisa para: " . get_query_var('s') . "</h4>");

            _e("<h4 class='page-title' style='font-size:4.5rem; margin-bottom:3.2rem ;'>Resultados da busca:  " . get_query_var('s') . "</h4>");

            while ($the_query->have_posts()) {
                $the_query->the_post();
        ?>

                <div class=""></div>


                <li class="no-bullet">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>


            <?php
            }
            // call the search form 
            ?>

            <div class="wrap-search-form" style="margin:5rem;">
                <?php get_search_form(); ?>
            </div>
        <?php
        } else {
        ?>
            <!-- <div class="alert alert-info"> -->
            <div class="desc-no-search">
                <!-- ?<php _e("<h4 class='page-title'> Desculpe, mas nada corresponde aos seus critérios de busca. 
                Por favor, tente novamente com palavras-chave diferentes.</h4>"); ?> -->

                <?php _e("<h4 class='page-title'>Sua busca por:  " . "<span class='small-case'>" . get_query_var('s') . "</span>" . "</h4>"); ?>

                <span>Não encontramos resultados para sua pesquisa. Tente nova palavra chave</span>
            </div>

            <!-- call the search form t -->
            <div class="wrap-search-form" style="margin:5rem;">
                <?php get_search_form(); ?>
            </div>


        <?php } ?>

    </div>




    <!-- the sidebar template -->
    <div class="side-bar">

        <!-- php tag em call the get_sidebar(); -->
        <!-- get_sidebar();  -->
    </div>




</section>
<?php get_footer(); ?>