<!-- 
    This page, contains the search fom template, its used to all pages when que function get_searchform(); is called.
    The template is totaly customizable.
 -->

<style>

.busca form {
    display: grid
}

.hidden {
    display: none
}

.busca #s {
    border: 2px solid #fff
}





.wrapper_inputs{
    display: flex;
     align-items: center;
     height: 4rem !important;
}


.wrapper_inputs input[type="text"]{
    padding: 15px 0 !important; 
    width: 55rem !important;  
    font-weight: 550 !important;
    color: #000 !important;
}

.wrapper_inputs input[type="submit"]{
    height: 4rem !important;
    width: 4rem !important;
    border: 1px solid #002140 !important;
    margin: 0 !important;
}


@media screen and (max-width:1022px){
    .wrapper_inputs input[type="text"]{
      width: 45rem !important;   
      padding: 11px 0 !important; 
    }  

    .wrapper_inputs input[type="submit"]{
       height: 3.5rem !important;
        width: 2rem !important;
    }
}

@media screen and (max-width:932px){
    .wrapper_inputs input[type="text"]{
      width: 25rem !important;   
      padding: 9px 0 !important; 
    }  

    .wrapper_inputs input[type="submit"]{
       height: 3rem !important;
        width: 2rem !important;
    }
}


@media screen and (max-width:738px){
    .wrapper_inputs input[type="text"]{
      width: 35rem !important;   
      
    }  
}

@media screen and (max-width:368px){
    .wrapper_inputs input[type="text"]{
      width: 30rem !important;   
      
    }  
}
@media screen and (max-width:326px){
    .wrapper_inputs input[type="text"]{
      width: 25rem !important;   
      
    }  
}





</style>



 <section class="custon_search_form_hero">
    <form role="search" method="get" id="searchform" class="searchform_home_hero" action="<?php echo esc_url(home_url('/')); ?>">
      
        <div class="wrapper_inputs">
            <input class="teste" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Pesquisar" />
            <input type="submit" id="searchsubmit" value="" title="buscar" />
        </div>


    </form>
</section>