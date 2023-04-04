<!-- 
    This page, contains the search fom template, its used to all pages when que function get_searchform(); is called.
    The template is totaly customizable.
 -->

<style>
.searchform.red{    
    padding: 10px;
}
input[type=text]{
    height: 6rem !important;
    width: 60rem !important;
    padding: 0 !important;
    color:  #0000;
    font-weight: 600 !important;
    font-size: 1.6rem;
    border: none !important;
}

input[type=submit]{
    height: 5rem !important;
    width: 7rem !important;
}
</style>



 <section class="custon_search_form home">
    <form role="search" method="get" id="searchform" class="searchform red" action="<?php echo esc_url(home_url('/')); ?>">
        <div>
            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Pesquisar" />
            <input type="submit" id="searchsubmit" value="" title="buscar" />
        </div>
    </form>
</section>