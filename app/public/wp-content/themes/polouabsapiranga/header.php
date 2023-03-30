<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- wordpress header -->
    <?php wp_head(); ?>
</head>

<body>
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
                <button class="hole-menu" id="btn-hamburguer">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>


            <!-- ###### MAIN MENU ####### -->
            <ul class="menu-itens container" id="mobile-menu">
                <!-- home -->
                <li><a href="/polouabsapiranga/Home">Home</a></li>
                <li><a href="/polouabsapiranga/Sobre">Sobre</a>
                    <!-- <div class="sub-menu">
                        <div class="column">
                            <h4 class="title-inner-menu">Sobre nós</h4>
                            <p class="desc">Somos um polo Educacional localizado na cidade de Sapiranga.</p>
                        </div>
                        <div class="Wrapper-degree sobre">
                            <div class="column">
                                <h4 class="degree">Sobre nós</h4>
                            </div>
                            <div class="column">
                                <h4 class="degree">Nossa História</h4>
                            </div>
                            <div class="column">
                                <h4 class="degree">Galeria de Imagens</h4>
                            </div>
                            <div class="column">
                                <h4 class="degree">Localização</h4>
                            </div>
                        </div>
                    </div> -->
                </li>

                <!-- menu cursos -->
                <li><a href="/polouabsapiranga/cursos">Cursos</a>
                    <!-- <div class="container sub-menu">
                        <div class="column">
                            <h4 class="title-inner-menu">Cursos Polo UAB Sapiranga</h4>
                            <p class="desc">Oferecemos mais de 40 cursos entre, técnicos,
                                graduação e pós gradução.</p>
                        </div>
                        <div class="Wrapper-degree">
                            <div class="column">
                                <h4 class="degree">Técnicos</h4>
                                <ul class="menu-course-list">
                                    <li><a href="#">Filosofia (UFPel)</a></li>
                                    <li><a href="#">Matemática (UFPel)</a></li>
                                    <li><a href="#">Geografia (UFSM)</a></li>
                                </ul>
                                <a class="see-full-list" href="#">Acesse a lista completa</a>
                            </div>
                            <div class="column">
                                <h4 class="degree">Graduação</h4>
                                <ul class="menu-course-list">
                                    <li><a href="#">Filosofia (UFPel)</a></li>
                                    <li><a href="#">Matemática (UFPel)</a></li>
                                    <li><a href="#">Geografia (UFSM)</a></li>
                                </ul>
                                <a class="see-full-list" href="#">Acesse a lista completa</a>
                            </div>
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
                    </div> -->
                </li>



                <li><a href="/polouabsapiranga/Editais">Editais</a></li>
                <li><a href="/polouabsapiranga/Biblioteca">biblioteca</a></li>
                <li><a href="/polouabsapiranga/Contato">Contato</a></li>
                <li><a href="/polouabsapiranga/noticias">Noticias</a></li>
                <li><a href="/polouabsapiranga/FAQ">FAQ</a></li>
            </ul>
        </nav>









        <!-- SUB MENU PESQUISAR ----------->
        <!-- <nav id="toggle-search-menu" class="toggle-menu" style="display:none;"> -->
        <!-- sub-menu SOBRE -->
        <!-- <div class="container sub-menu form"> -->
        <!-- 1º First column -->
        <!-- <div class="column">
                        <h4 class="title-inner-menu">O que você deseja pesquisar?</h4>
                        <p class="desc">Oferecemos mais de 40 cursos entre, técnicos,
                            graduação e pós gradução.</p>
                    </div> -->

        <div class="Wrapper-searchform" style="display:none;">
            <!-- <?php get_search_form(); ?> -->

        </div> <!-- </div> -->


        <!-- </nav> -->
    </header>

    <script>
        // ###################################################################
        //######### This functions show and hide the SEARCH submenu ##########
        // ###################################################################
        var btn_search = document.getElementById("search-form");
        // btn_search.addEventListener("mouseover", function() {
        btn_search.addEventListener("click", function() {

            var showMenu = document.getElementById("toggle-search-menu");

            if (showMenu.classList.contains('on')) {
                showMenu.classList.remove("on");
            } else {
                showMenu.classList.add("on");
            }
        });

        //##################################################################### 
        //########### This functions show the MAIN mobile menu ########
        //##################################################################### 
        var btnHamburguer = document.getElementById("btn-hamburguer");

        btnHamburguer.addEventListener("click", function() {

            var showMainMenu = document.getElementById("mobile-menu");

            if (showMainMenu.classList.contains('on')) {
                showMainMenu.classList.remove("on");
            } else {
                showMainMenu.classList.add("on");
            }
        });
    </script>

    <!-- verificando se um elemento tem classe -->
    <!-- https://pt.stackoverflow.com/questions/9605/detectar-se-um-elemento-cont%C3%A9m-uma-classe-com-javascript-puro -->