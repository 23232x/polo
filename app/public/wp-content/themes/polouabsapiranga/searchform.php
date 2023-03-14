<!-- 
    This page, contains the search fom template, its used to all pages when que function get_searchform(); is called.
    The template is totaly customizable.
 -->




<section class="custon_search_form">

    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
        <div>

            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Pesquisar" />
            <input type="submit" id="searchsubmit" value="" title="buscar" />

        </div>
    </form>

</section>