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
            <div class="search-form">
                <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/search.svg" alt="">
                    <span>Pesquisar</span>
                </a>
            </div>
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
        <nav id="toggle-menu" class="toggle-menu on" style="display:none;">
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


            <!-- sub-menu PESQUISAR -->



        </nav>

        <!-- sub-menu PESQUISAR -->
        <nav id="toggle-menu" class="toggle-menu on" style="display:block;">
            <!-- sub-menu SOBRE -->
            <div class=" container sub-menu form">
                <!-- 1º First column -->
                <div class="column">
                    <h4 class="title-inner-menu">O que você deseja pesquisar?</h4>
                    <p class="desc">Oferecemos mais de 40 cursos entre, técnicos,
                        graduação e pós gradução.</p>
                </div>

                <div class="Wrapper-searchform">
                </div>
            </div>
        </nav>
    </header>