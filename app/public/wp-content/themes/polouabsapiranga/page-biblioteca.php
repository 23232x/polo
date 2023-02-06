<?php
// Template Name: Biblioteca
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- conteúdo da página vai aqui -->


        <section class="section container">
            <!-- all subpages contains this section socials icon on the top page -->
            <div class="social-medias-top-page">

                <!-- Social medias -->
                <ul>
                    <!-- facebook -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/face.svg" alt="Facebook Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- instagram -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/insta.svg" alt="Instagram Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- youtube -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/youtube.svg" alt="Youtube Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- whatsapp -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/whats.svg" alt="WhatsApp Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- email -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/email.svg" alt="E-mail Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- print -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/print.svg" alt=" Versão impressa da página">
                        </a>
                    </li>





                </ul>
            </div>

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


            <!-- Virtual libraries -->
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
                        <div class="link-title on">
                            <h4 id="link01">Bibliotecas Universitárias Virtuais</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </div>
                        <ul style="display: block;">
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


            <!-- List of repositories  -->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Repositórios Institucionais</h4>
                    <p> Lista de Repositórios institucionais.</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <div class="link-title on">
                            <h4 id="link01">REPOSITÓRIOS</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </div>
                        <ul style="display: block;">
                            <li><a href="http://www.ibict.br/informacao-para-ciencia-tecnologia-e-inovacao%20/repositorios-digitais/repositorios-brasileiros" target="_blank">Respositórios</a></li>

                        </ul>
                    </div>
                </div>
            </div>


            <!-- Digital library -->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Bibliotecas Digitais</h4>
                    <p> Diversos links de acessos para Bibliotecas digitais</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <div class="link-title on">
                            <h4 id="link01">bibliotecas digitais</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </div>
                        <ul style="display: block;">
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




            <!-- PERIODICALS PORTAL -->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>PORTAL DE PERIÓDICOS</h4>
                    <p> Descrição desta sessão de links</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <div class="link-title on">
                            <h4 id="link01">PORTAL DE PERIÓDICOS</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </div>
                        <ul style="display: block;">
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



            <!-- Maths -->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Matemática</h4>
                    <p>Lista de periódicos de matemática e afins</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <div class="link-title on">
                            <h4 id="link01">Matemática e afins</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </div>
                        <ul style="display: block;">
                            <li><a href="https://uniso.br/biblioteca/base_de_dados/periodicos_eletronicos/Matematica.pdf" target="_blank">UNISO</a></li>

                        </ul>
                    </div>
                </div>
            </div>




            <!-- PHILOSOPHY -->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Filosofia</h4>
                    <p>Lista de periódicos de matemática e afins</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <div class="link-title on">
                            <h4 id="link01">Matemática e afins</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </div>
                        <ul style="display: block;">
                            <li><a href="http://www.emcurso.ufscar.br/index.php/emcurso" target="_blank">UFSCAR</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- INFORMATION SCIENCE -->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Ciência da informação</h4>
                    <p>Lista de links ciência da informação.</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <div class="link-title on">
                            <h4 id="link01">CIÊNCIAS DA INFORMAÇÃO</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </div>
                        <ul style="display: block;">
                            <li><a href="https://periodicos.ufmg.br/index.php/pci/issue/view/1929" target="_blank">UFMG periódico</a></li>
                            <li><a href="http://portaldeperiodicos.eci.ufmg.br/index.php/pci" target="_blank">UFMG periódico</a></li>
                            <li><a href="http://revista.ibict.br/ciinf" target="_blank">Revista IBICT</a></li>
                            <li><a href="http://revista.arquivonacional.gov.br/index.php/revistaacervo" target="_blank">Revista Arquivo Nacional</a></li>
                        </ul>
                    </div>
                </div>
            </div>



            <!-- pedagogy -->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4>Ciência da informação</h4>
                    <p>Lista de links ciência da informação.</p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <div class="link-title on">
                            <h4 id="link01">CIÊNCIAS DA INFORMAÇÃO</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </div>
                        <ul style="display: block;">
                            <li><a href="https://periodicos.ufmg.br/index.php/pci/issue/view/1929" target="_blank">UFMG periódico</a></li>
                            <li><a href="http://portaldeperiodicos.eci.ufmg.br/index.php/pci" target="_blank">UFMG periódico</a></li>
                            <li><a href="http://revista.ibict.br/ciinf" target="_blank">Revista IBICT</a></li>
                            <li><a href="http://revista.arquivonacional.gov.br/index.php/revistaacervo" target="_blank">Revista Arquivo Nacional</a></li>
                        </ul>
                    </div>
                </div>
            </div>







        </section>






        <!-- 
        

      
       

        PEDAGOGIA
        http://www.cadernosdapedagogia.ufscar.br/index.php/cp

        EDUCAÇÃO EM SAÚDE
        http://www.periodicos.fiocruz.br/
        Recursos Educacionais Abertos:
        http://www.educapes.capes.gov.br/simple-search?query=info - EDUCAPES -->






















<?php endwhile;
else : endif ?>
<?php get_footer(); ?>