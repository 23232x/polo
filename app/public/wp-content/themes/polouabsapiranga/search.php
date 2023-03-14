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

    <!-- import the social medias template -->
    <?php
    get_template_part('template-parts/social-medias');
    ?>




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