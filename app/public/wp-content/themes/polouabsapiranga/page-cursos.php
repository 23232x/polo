<?php
// Template Name: Cursos
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- conteúdo da página vai aqui -->


        <section class="section container">

            <!-- import the social medias template -->
            <?php
            get_template_part('template-parts/social-medias');
            ?>

            <!-- tittle -->
            <div class="title-section">
                <h4><?php the_field('titulo_pagina_biblioteca'); ?></h4>
                <ul>
                    <li>
                        <span>
                            <?php the_field('subtitulo_pagina_biblioteca'); ?></span>
                    </li>
                </ul>
            </div>

            <div class="contend-section">
                <p class="text wrapper"></p>
            </div>
        </section>


        <!-- page contend -->
        <section class="main-page bg library">

            <!--##########  COURSES: graduacao #########-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Cursos de graduação</h4>
                    <p>Descrição cursos </p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link1">
                            <h4 class="title-type">Graduação</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>

                        <ul id="listlk1" style="display:none;">
                            <li><a href="/polouabsapiranga/licenciatura-em-letras-espanhol-ufpel">Licenciatura em Letras Espanhol-UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="/polouabsapiranga/licenciatura-em-filosofia-ufpel">Licenciatura em Filosofia-UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="">Licenciatura em História-UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="">Licenciatura em Matemática-UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="">Licenciatura em Matemática-UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="">Licenciatura em Pedagogia-FURG</a><span class="status">Em andamento</span></li>

                            <!-- Encerrados -->
                            <li><a href="#">Pedagogia-UFRGS</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Pedagogia-UFPel</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Matemática-FURG</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Matemática-UFPel</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Letras Espanhol-UFPel</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Educação do Campo-UFPel</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Física-UFSM</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Administração-FURG</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Formação de Professores para a Educação Profissional-UFSM </a><span class="status">Encerrado</span></li>
                            <li><a href="#">História-FURG</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Filosofia-UFPel</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Geografia-UFSM</a><span class="status">Encerrado</span></li>
                            <li><a href="#">Tecnologia em Sistemas para a Internet-IFSUL</a><span class="status">Encerrado</span></li>


                            <!-- Previstos -->
                            <li><a href="">Licenciatura em História-IFSUL</a><span class="status">Previsto</span></li>
                            <li><a href=""> Linguagens/Letras - IFSUL</a><span class="status">Previsto</span></li>
                            <li><a href=""> Letras Inglês - UFRGS</a><span class="status">Previsto</span></li>
                            <li><a href=""> Licenciatura em Computação - UFSM</a><span class="status">Previsto</span></li>
                            <li><a href=""> Licenciatura em Educação Especial - UFSM</a><span class="status">Previsto</span></li>
                            <li><a href=""> Formação de Professores para a Educação Profissional - UFSM</a><span class="status">Previsto</span></li>
                            <li><a href=""> Tecnologia em Sistemas para a Internet - IFSUL</a><span class="status">Previsto</span></li>
                        </ul>

                    </div>
                </div>
            </div>


            <!-- ########## COURSES: pos-graduacao  #######-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Cursos de Pós-Graduação</h4>
                    <p>Descrição cursos de Pós-Graduação.</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link2">
                            <h4 class="title-type">Pós Graduação</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk2" style="display: none;">

                            <!-- Em andamento -->
                            <li><a href="https://argo.furg.br/">Licenciatura em Letras Espanhol-UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="https://argo.furg.br/">Especialização em Artes - UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="https://argo.furg.br/">Alfabetização - FURG</a><span class="status">Em andamento</span></li>


                            <!-- Encerrados -->
                            <li><a href="">Matemática, Mídias Digitais e Didática - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="">Educação Ambiental - UFSM</a><span class="status">Encerrados</span></li>
                            <li><a href="">Informática Instrumental para Professores da Educação Básica - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="">Gestão Pública - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="">Gestão em Saúde - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="">Gestão Pública Municipal - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="">Gestão de Polos - UFPel</a><span class="status">Encerrados</span></li>
                            <li><a href="">Mídias na Educação - IFSUL</a><span class="status">Encerrados</span></li>
                            <li><a href="">Gestão Educacional - UFSM</a><span class="status">Encerrados</span></li>
                            <li><a href="">Educação de jovens e adultos na diversidade - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="">Tecnologias da Informação e da Comunicação na Educação - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="">Rio Grande do Sul: sociedade, política e cultura - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="">Matemática - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="">Educação Física e Anos Iniciais - UFSM</a><span class="status">Encerrados</span></li>
                            <li><a href="">Aplicações para a Web - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="">Ensino de Sociologia no Ensino Médio - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="">Psicopedagogia - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="">Filosofia - UFPel</a><span class="status">Encerrados</span></li>
                            <li><a href="">Educação em Direitos Humanos - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="">Gestão da Educação - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="">Ciências é 10! - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="">Artes - UFPel</a><span class="status">Encerrados</span></li>
                            <li><a href="">Educação Física Escolar - UFPel</a><span class="status">Encerrados</span></li>
                            <li><a href="">Espaços e possibilidades para a educação continuada - IFSUL</a><span class="status">Encerrados</span></li>

                            <!-- previstos -->
                            <li><a href="">Ensino de Filosofia no ensino Médio - UFSM</a><span class="status">Previsto</span></li>
                            <li><a href="">Atendimento Educacional Especializado - FURG</a><span class="status">Previsto</span></li>
                            <li><a href=""> Mídia e Educação - UNIPAMPA</a><span class="status">Previsto</span></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- ########## COURSES: tecnicos  #######-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Cursos Técnicos</h4>
                    <p>Descrição Cursos técnicos</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link3">
                            <h4 class="title-type">técnicos</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk3" style="display: none;">
                            <li><a href="https://argo.furg.br/">Licenciatura em Letras Espanhol-UFPel</a><span class="status">Em andamento</span></li>
                        </ul>
                    </div>
                </div>
            </div>



            <!-- ########## COURSES: Cursos FIC - IFSUL:  #######-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Cursos FIC - IFSUL</h4>
                    <p>Descrição Cursos Cursos FIC - IFSUL:</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link4">
                            <h4 class="title-type">técnicos</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk4" style="display: none;">
                            <li><a href="http://ead.ifsul.edu.br/index.php/cursos">Lista de Cursos FIC - IFSUL</a><span class="status">Em andamento</span></li>
                        </ul>
                    </div>
                </div>
            </div>





        </section>

<?php endwhile;
else : endif ?>
<?php get_footer(); ?>




<script>
    // ########## block links 1 #############
    var lk1 = document.getElementById("link1");
    lk1.addEventListener("click", function() {
        var list1 = document.getElementById("listlk1");
        if (list1.classList.contains("swanw") && lk1.classList.contains("on")) {
            list1.classList.remove("swanw");
            lk1.classList.remove("on");
        } else {
            list1.classList.add("swanw");
            lk1.classList.add("on");
        }
    });


    // ########## block links 2 #############
    var lk2 = document.getElementById("link2");

    lk2.addEventListener("click", function() {

        var list2 = document.getElementById("listlk2");
        if (list2.classList.contains("swanw") && lk2.classList.contains("on")) {
            list2.classList.remove("swanw");
            lk2.classList.remove("on");
        } else {
            list2.classList.add("swanw");
            lk2.classList.add("on");
        }
    });



    // ########## block links 3 #############
    var lk3 = document.getElementById("link3");

    lk3.addEventListener("click", function() {

        var list3 = document.getElementById("listlk3");
        if (list3.classList.contains("swanw") && lk3.classList.contains("on")) {
            list3.classList.remove("swanw");
            lk3.classList.remove("on");
        } else {
            list3.classList.add("swanw");
            lk3.classList.add("on");
        }
    });

    // ########## block links 4 #############
    var lk4 = document.getElementById("link4");

    lk4.addEventListener("click", function() {
        var list4 = document.getElementById("listlk4");
        if (list4.classList.contains("swanw") && lk4.classList.contains("on")) {
            list4.classList.remove("swanw");
            lk4.classList.remove("on");
        } else {
            list4.classList.add("swanw");
            lk4.classList.add("on");
        }
    });
</script>