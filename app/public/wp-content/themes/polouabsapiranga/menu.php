<?php
// Template Name: omenu
?>


<?php wp_head(); ?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>


        <header>
            <!-- polo UAB Logo -->
            <div class="top-header container">
                <a href="/">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/logo.svg" alt="">
                    <span class="polo">Polo Universitário UAB
                        <span class="uab">de Sapiranga</span>
                    </span>
                </a>

                <!-- search form -->
                <button class="search-form" id="search-form">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/search.svg" alt="">
                    <span>Pesquisar</span>
                </button>
            </div>


            <!-- nav do menu responsivo -->
            <nav class="menu">

                <!--btn-hamburguer  -->
                <div class="btn-hamburguer container" style="display:none;">
                    <span class="menu_">Menu</span>
                    <div class="hole-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>


                <!-- the main menu itens -->
                <ul class="menu-itens container">
                    <li><a href="/polouabsapiranga/Home">Home</a></li>
                    <li><a href="/polouabsapiranga/sobre">Sobre</a></li>
                    <li id="sub-item"><a href="#">Cursos</a></li>
                    <li><a href="#">Editais</a></li>
                    <li><a href="/polouabsapiranga/Biblioteca">biblioteca</a></li>
                    <li><a href="/polouabsapiranga/Contato">Contato</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="/polouabsapiranga/FAQ">FAQ</a></li>
                </ul>
            </nav>


            <!-- sub-menu cursos itens -->
            <nav id="toggle-menu" class="toggle-menu" style="display:none;">
                <!-- sub-menu SOBRE -->
                <div class=" container sub-menu">
                    <!-- 1º First column -->
                    <div class="column">
                        <h4 class="title-inner-menu">Cursos Polo UAB Sapiranga</h4>
                        <p class="desc">Oferecemos mais de 40 cursos entre, técnicos,
                            graduação e pós gradução.</p>
                    </div>

                    <div class="Wrapper-degree">

                        <!-- 2º Tecnicos-->
                        <div class="column">
                            <h4 class="degree">Técnicos</h4>
                            <ul class="menu-course-list">
                                <li><a href="#">Filosofia (UFPel)</a></li>
                                <li><a href="#">Matemática (UFPel)</a></li>
                                <li><a href="#">Geografia (UFSM)</a></li>
                            </ul>
                            <a class="see-full-list" href="#">Acesse a lista completa</a>
                        </div>

                        <!-- 2º Tecnicos-->
                        <div class="column">
                            <h4 class="degree">Graduação</h4>
                            <ul class="menu-course-list">
                                <li><a href="#">Filosofia (UFPel)</a></li>
                                <li><a href="#">Matemática (UFPel)</a></li>
                                <li><a href="#">Geografia (UFSM)</a></li>
                            </ul>
                            <a class="see-full-list" href="#">Acesse a lista completa</a>
                        </div>

                        <!-- 2º Tecnicos-->
                        <div class="column">
                            <h4 class="degree">Pós Graduação</h4>
                            <ul class="menu-course-list">
                                <li><a href="#">Filosofia (UFPel)</a></li>
                                <li><a href="#">Matemática (UFPel)</a></li>
                                <li><a href="#">Geografia (UFSM)</a></li>
                            </ul>
                            <a class="see-full-list" href="#">Acesse a lista completa</a>
                        </div>
                    </div>
                </div>
            </nav>

            <!------------- SUB-MENU SEARCH ----------->
            <nav id="toggle-search-menu" class="toggle-menu" style="display:none;">
                <!-- sub-menu SOBRE -->
                <div class=" container sub-menu form">
                    <!-- 1º First column -->
                    <div class="column">
                        <h4 class="title-inner-menu">O que você deseja pesquisar?</h4>
                        <p class="desc">Oferecemos mais de 40 cursos entre, técnicos,
                            graduação e pós gradução.</p>
                    </div>

                    <div class="Wrapper-searchform">
                        <?php get_search_form(); ?>

                    </div>
                </div>
            </nav>
        </header>



<?php
    }
}
?>

<script>
    var btn_search = document.getElementById("search-form");
    btn_search.addEventListener("click", function() {



        if (showMenu.classList.contains('on')) {
            break;
        } else {
            showMenu.classListaskljdskajd lak
        }

        var showMenu = document.getElementById("toggle-search-menu");
        showMenu.classList.add("on");

    });
</script>

<!-- verificando se um elemento tem classe -->
<!-- https://pt.stackoverflow.com/questions/9605/detectar-se-um-elemento-cont%C3%A9m-uma-classe-com-javascript-puro -->