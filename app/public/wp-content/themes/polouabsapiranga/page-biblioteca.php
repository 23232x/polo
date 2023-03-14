<?php
// Template Name: Biblioteca
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

            <!--########## vt libraty 01 #########-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Bibliotecas Universitárias</h4>
                    <p>
                        Links de acesso aos sites das Bibliotecas das Universidades participantes da UAB, bem como os sites de consulta ao acervo.
                    </p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link1">
                            <h4 class="title-type">Bibliotecas Universitárias Virtuais</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>

                        <ul id="listlk1" style="display:none;">
                            <li><a href="https://argo.furg.br/" target="_blank">Consulta ao acervo FURG</a></li>
                            <li><a href="http://www.biblioteca.furg.br/" target="_blank">Biblioteca FURG</a></li>
                            <li><a href="https://pergamum.ufpel.edu.br/pergamum/biblioteca/" target="_blank">Consulta ao acervo UFPEL</a></li>
                            <li><a href="https://wp.ufpel.edu.br/sisbi/" target="_blank">Sistema de bibliotecas UFPEL</a></li>
                            <li><a href="https://sabi.ufrgs.br/F?RN=872304312" target="_blank">Consulta ao acervo UFRGS</a></li>
                            <li><a href="https://www.ufrgs.br/bibliotecas/" target="_blank">Sistema de bibliotecas UFRGS</a></li>
                            <li><a href="https://portal.ufsm.br/biblioteca/pesquisa/index.html" target="_blank">Consulta ao acervo UFSM</a></li>
                            <li><a href="http://w3.ufsm.br/biblioteca/" target="_blank">Biblioteca UFSM</a></li>
                            <li><a href="https://portal.fiocruz.br/pt-br/content/bibliotecas-virtuais-em-sa%C3%BAde" target="_blank">Consulta ao acervo Fiocruz</a></li>
                        </ul>

                    </div>
                </div>
            </div>


            <!-- ########## List of repositories 02  #######-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Repositórios Institucionais</h4>
                    <p> Lista de Repositórios institucionais.</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link2">
                            <h4 class="title-type">repositórios</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk2" style="display: none;">
                            <li><a href="http://www.ibict.br/informacao-para-ciencia-tecnologia-e-inovacao%20/repositorios-digitais/repositorios-brasileiros" target="_blank">Respositórios</a></li>

                        </ul>
                    </div>
                </div>
            </div>


            <!--############# Digital library 03 #############-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Bibliotecas Digitais</h4>
                    <p> Diversos links de acessos para Bibliotecas digitais</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link3">
                            <h4 class="title-type">bibliotecas digitais</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk3" style="display: none;">
                            <li><a href="https://www.wdl.org/pt/" target="_blank">Library of congress</a></li>
                            <li><a href="http://www.dominiopublico.gov.br/pesquisa/PesquisaObraForm.jsp" target="_blank">Domínio Público</a></li>
                            <li><a href="http://www.scielo.org/php/index.php" target="_blank">Scielo</a></li>
                            <li><a href="https://www.bbm.usp.br/" target="_blank">USP</a></li>
                            <li><a href="http://www.paulofreire.ufpb.br/paulofreire/principal.jsp">PEDAGOGIA</a></li>
                            <li><a href="http://bndigital.bn.gov.br/" target="_blank">Biblioteca Digital Nacional</a></li>
                            <li><a href="http://www.stf.jus.br/portal/biblioteca/pesquisarBibliotecaDigital.asp" target="_blank">STF</a></li>
                            <li><a href="http://www.bibliotecadigital.unicamp.br/" target="_blank">UNICAMP</a></li>
                            <li><a href="https://bibdig.biblioteca.unesp.br/" target="_blank">UNESP</a></li>
                            <li><a href="http://www.gutenberg.org/" target="_blank">Gutenberg, em inglês</a></li>

                        </ul>
                    </div>
                </div>
            </div>




            <!-- ########### PERIODICALS PORTAL 04 ##########-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>portal de periódicos</h4>
                    <p> Descrição desta sessão de links</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link4">
                            <h4 class="title-type">portal de periódicos</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>

                        <ul id="listlk4" style="display:none;">
                            <li><a href="http://www.periodicos.capes.gov.br/" target="_blank">CAPES periódicos </a></li>
                            <li><a href="http://www.ufrgs.br/periodicos/periodicos-1" target="_blank">UFRGS periódicos</a></li>
                            <li><a href="https://periodicos.ufsm.br/index.php" target="_blank">UFSM periódicos</a></li>
                            <li><a href="https://revistas.ufrj.br/" target="_blank">UFRJ periódicos</a></li>
                            <li><a href="http://periodicos.bu.ufsc.br/" target="_blank">UFSC periódicos</a></li>
                            <li><a href="http://proxy.furb.br/ojs/" target="_blank">FURB periódicos</a></li>
                            <li><a href="http://revistas.ufpr.br/psicologia/issue/view/2363" target="_blank">UFPR periódicos</a></li>
                        </ul>
                    </div>
                </div>
            </div>



            <!--######## Maths 05 ###########-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Matemática</h4>
                    <p>Lista de periódicos de matemática e afins</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link5">
                            <h4 class="title-type">Matemática e afins</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk5" style="display: none;">
                            <li><a href="https://uniso.br/biblioteca/base_de_dados/periodicos_eletronicos/Matematica.pdf" target="_blank">UNISO</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!--########## PHILOSOPHY 06 ############-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Filosofia</h4>
                    <p>Lista de periódicos de matemática e afins</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link6">
                            <h4 class="title-type">Matemática e afins</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk6" style="display:none;">
                            <li><a href="http://www.emcurso.ufscar.br/index.php/emcurso" target="_blank">UFSCAR</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!--####### INFORMATION SCIENCE 07 #######-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Ciência da informação</h4>
                    <p>Lista de links ciência da informação.</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link7">
                            <h4 class="title-type">ciência da Informação</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk7" style="display: none;">
                            <li><a href="https://periodicos.ufmg.br/index.php/pci/issue/view/1929" target="_blank">UFMG periódico</a></li>
                            <li><a href="http://portaldeperiodicos.eci.ufmg.br/index.php/pci" target="_blank">UFMG periódico</a></li>
                            <li><a href="http://revista.ibict.br/ciinf" target="_blank">Revista IBICT</a></li>
                            <li><a href="http://revista.arquivonacional.gov.br/index.php/revistaacervo" target="_blank">Revista Arquivo Nacional</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--############ PEDAGOGY 08 ###############-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Ciência da informação</h4>
                    <p>Lista de links ciência da informação.</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link8">
                            <h4 class="title-type">Ciência da informação</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk8" style="display: none;">
                            <li><a href="https://periodicos.ufmg.br/index.php/pci/issue/view/1929" target="_blank">UFMG periódico</a></li>
                            <li><a href="http://portaldeperiodicos.eci.ufmg.br/index.php/pci" target="_blank">UFMG periódico</a></li>
                            <li><a href="http://revista.ibict.br/ciinf" target="_blank">Revista IBICT</a></li>
                            <li><a href="http://revista.arquivonacional.gov.br/index.php/revistaacervo" target="_blank">Revista Arquivo Nacional</a></li>
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


    // ########## block links 5 #############
    var lk5 = document.getElementById("link5");
    lk5.addEventListener("click", function() {
        var list5 = document.getElementById("listlk5");
        if (list5.classList.contains("swanw") && lk5.classList.contains("on")) {
            list5.classList.remove("swanw");
            lk5.classList.remove("on");
        } else {
            list5.classList.add("swanw");
            lk5.classList.add("on");
        }
    });


    // ########## block links 6 #############
    var lk6 = document.getElementById("link6");
    lk6.addEventListener("click", function() {
        var list6 = document.getElementById("listlk6");
        if (list6.classList.contains("swanw") && lk6.classList.contains("on")) {
            list6.classList.remove("swanw");
            lk6.classList.remove("on");
        } else {
            list6.classList.add("swanw");
            lk6.classList.add("on");
        }
    });

    // ########## block links 7 #############
    var lk7 = document.getElementById("link7");
    lk7.addEventListener("click", function() {
        var list7 = document.getElementById("listlk7");
        if (list7.classList.contains("swanw") && lk7.classList.contains("on")) {
            list7.classList.remove("swanw");
            lk7.classList.remove("on");
        } else {
            list7.classList.add("swanw");
            lk7.classList.add("on");
        }
    });

    // ########## block links 8 #############
    var lk8 = document.getElementById("link8");
    lk8.addEventListener("click", function() {
        var list8 = document.getElementById("listlk8");
        if (list8.classList.contains("swanw") && lk8.classList.contains("on")) {
            list8.classList.remove("swanw");
            lk8.classList.remove("on");
        } else {
            list8.classList.add("swanw");
            lk8.classList.add("on");
        }
    });
</script>