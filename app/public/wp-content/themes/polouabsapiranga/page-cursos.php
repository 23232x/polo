<?php
// Template Name: Cursos
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- conteúdo da página vai aqui -->


        <section class="section container">

            <!-- breadcrumb -->
            <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

            <!-- import the social medias template -->
            <?php get_template_part('template-parts/social-medias'); ?>

            <!-- tittle -->
            <div class="title-section">
                <h4>titulo página biblioteca</h4>
                <ul>
                    <li>
                        <span>
                            subtitulo página biblioteca</span>
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
                            <li><a href="/polouabsapiranga/licenciatura-em-historia-ufpel">Licenciatura em História-UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="/polouabsapiranga/licenciatura-em-matematica-ufpel">Licenciatura em Matemática-UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="/polouabsapiranga/licenciatura-em-pedagogia-furg">Licenciatura em Pedagogia-FURG</a><span class="status">Em andamento</span></li>
                            <!-- Encerrados -->
                            <li><a href="/polouabsapiranga/pedagogia-ufrgs">Pedagogia - UFRGS</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/pedagogia-ufpel">Pedagogia-UFPel</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/matematica-furg">Matemática-FURG</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/matematica-ufpel">Matemática-UFPel</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/letras-espanhol-ufpel">Letras Espanhol-UFPel</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/educacao-do-campo-ufpel">Educação do Campo-UFPel</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/fisica-ufsm">Física-UFSM</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/administracao-furg">Administração-FURG</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/formacao-de-professores-para-a-educacao-profissional-ufsm">Formação de Professores para a Educação Profissional-UFSM </a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/historia-furg">História-FURG</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/filosofia-ufpel">Filosofia-UFPel</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/geografia-ufsm">Geografia-UFSM</a><span class="status">Encerrado</span></li>
                            <li><a href="/polouabsapiranga/tecnologia-em-sistemas-para-a-internet-ifsul">Tecnologia em Sistemas para a Internet-IFSUL</a><span class="status">Encerrado</span></li>
                            <!-- Previstos -->
                            <li><a href="/polouabsapiranga/licenciatura-em-historia-ifsul">Licenciatura em História-IFSUL</a><span class="status">Previsto</span></li>
                            <li><a href="/polouabsapiranga/linguagens-letras-ifsul"> Linguagens/Letras - IFSUL</a><span class="status">Previsto</span></li>
                            <li><a href="/polouabsapiranga/letras-ingles-ufrgs">Letras Inglês - UFRGS</a><span class="status">Previsto</span></li>
                            <li><a href="/polouabsapiranga/licenciatura-em-computacao-ufsm">Licenciatura em Computação - UFSM</a><span class="status">Previsto</span></li>
                            <li><a href="/polouabsapiranga/licenciatura-em-educacao-especial-ufsm">Licenciatura em Educação Especial - UFSM</a><span class="status">Previsto</span></li>
                            <li><a href="/polouabsapiranga/formacao-de-professores-para-a-educacao-profissional-ufsm">Formação de Professores para a Educação Profissional - UFSM</a><span class="status">Previsto</span></li>

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
                            <li><a href="/polouabsapiranga/licenciatura-em-letras-espanhol-ufpel">Licenciatura em Letras Espanhol-UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="/polouabsapiranga/especializacao-em-artes-ufpel">Especialização em Artes - UFPel</a><span class="status">Em andamento</span></li>
                            <li><a href="/polouabsapiranga/alfabetizacao-furg">Alfabetização - FURG</a><span class="status">Em andamento</span></li>


                            <!-- Encerrados -->
                            <li><a href="/polouabsapiranga/matematica-midias-digitais-e-didatica-ufrgs">Matemática, Mídias Digitais e Didática - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/educacao-ambiental-ufsm">Educação Ambiental - UFSM</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/informatica-instrumental-para-professores-da-educacao-basica-ufrgs">Informática Instrumental para Professores da Educação Básica - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/gestao-publica-ufrgs">Gestão Pública - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/gestao-em-saude-ufrgs">Gestão em Saúde - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/gestao-publica-municipal-ufrgs">Gestão Pública Municipal - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/gestao-de-polos-ufpel">Gestão de Polos - UFPel</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/midias-na-educacao-ifsul">Mídias na Educação - IFSUL</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/gestao-educacional-ufsm">Gestão Educacional - UFSM</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/educacao-de-jovens-e-adultos-na-diversidade-furg">Educação de jovens e adultos na diversidade - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/tecnologias-da-informacao-e-da-comunicacao-na-educacao-furg">Tecnologias da Informação e da Comunicação na Educação - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/rio-grande-do-sul-sociedade-politica-e-cultura-furg">Rio Grande do Sul: sociedade, política e cultura - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/matematica-furg">Matemática - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/educacao-fisica-e-anos-iniciais-ufsm">Educação Física e Anos Iniciais - UFSM</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/aplicacoes-para-a-web-furg">Aplicações para a Web - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/ensino-de-sociologia-no-ensino-medio-furg">Ensino de Sociologia no Ensino Médio - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/psicopedagogia-ufrgs">Psicopedagogia - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/filosofia-ufpel">Filosofia - UFPel</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/educacao-em-direitos-humanos-furg">Educação em Direitos Humanos - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/gestao-da-educacao-ufrgs">Gestão da Educação - UFRGS</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/ciencias-e-10-furg">Ciências é 10! - FURG</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/artes-ufpel">Artes - UFPel</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/educacao-fisica-escolar-ufpel">Educação Física Escolar - UFPel</a><span class="status">Encerrados</span></li>
                            <li><a href="/polouabsapiranga/espacos-e-possibilidades-para-a-educacao-continuada-ifsul">Espaços e possibilidades para a educação continuada - IFSUL</a><span class="status">Encerrados</span></li>

                            <!-- previstos -->
                            <li><a href="/polouabsapiranga/ensino-de-filosofia-no-ensino-medio-ufsm">Ensino de Filosofia no ensino Médio - UFSM</a><span class="status">Previsto</span></li>
                            <li><a href="/polouabsapiranga/atendimento-educacional-especializado-furg">Atendimento Educacional Especializado - FURG</a><span class="status">Previsto</span></li>
                            <li><a href="/polouabsapiranga/midia-e-educacao-unipampa"> Mídia e Educação - UNIPAMPA</a><span class="status">Previsto</span></li>
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
                            <li><a href="/polouabsapiranga/licenciatura-em-letras-espanhol-ufpel">Licenciatura em Letras Espanhol-UFPel</a><span class="status">Em andamento</span></li>
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
                            <li><a href="cursos-fic-ifsul" title="Lista de Cursos FIC - IFSUL">Lista de Cursos FIC - IFSUL</a><span class="status">Em andamento</span></li>
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