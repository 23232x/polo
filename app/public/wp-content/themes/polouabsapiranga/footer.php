    <footer class="footer">



        <!-- primeira coluna logo -->
        <div class="container">

            <!-- contains the logo and little description -->
            <div class="footer-logo">
                <a href="/">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/logo.svg" alt="">
                    <span>Polo Universitário UAB </br> de Sapiranga</span>
                </a>

                <p class="desc-polo-footer">
                    O Polo universitário UAB de Sapiranga
                    oferece mais de XX cursos.
                    Veja todos os cursos disponíveis.
                </p>
            </div>


            <div class="footer-courses">

                <!-- TÉCNICOS -->
                <section class="footer-course">
                    <h4>Técnicos</h4>
                    <ul>
                        <li><a href="/tecnicos/AlimentacaoEscolar" title="Curso de Filosofia">Alimentação escolar</a></li>
                        <li><a href="/tecnicos/infraestruturaEscolar" title="">Infraestrutura escolar</a></li>
                        <li><a href="/tecnicos/secretariaEscolar" title="">Secretaria escolar</a></li>
                        <li><a href="/tecnicos/MultimeiosDidaticos" title="">Multimeios didáticos</a></li>
                    </ul>
                </section>

                <!-- GRADUAÇÃO -->
                <section class="footer-course">
                    <h4>Graduação</h4>
                    <ul>
                        <li><a href="/graduacao/geografia" title="">Geografia UFSM</a></li>
                        <li><a href="/graduacao/pedagogia" title="">Pedagogia UFPel</a></li>
                        <li><a href="/graduacao/pedagogia" title="">Pedagogia UFRGS</a></li>
                        <li><a href="/graduacao/SistemasParaInternet" title="">Sistemas para internet</a></li>
                        <!-- repetat here -->

                        <li><a href="/graduacao/">Licenciatura em Filosofia - UFPel</a></li>
                        <li><a href="/graduacao/filosofia" title="Curso de Filosofia">Filosofia UFPel</a></li>
                        <li><a href="/graduacao/historia" title="">História FURG</a></li>
                        <li><a href="/graduacao/">Licenciatura em História - UFPel</a></li>

                    </ul>
                </section>

                <!-- PÓS GRADUAÇÃO -->
                <section class="footer-course">
                    <h4>Pós-Graduação</h4>
                    <ul>
                        <li><a href="/pos-graduacao/GestaoDaEducacao" title="">Gestão da educação</a></li>
                        <li><a href="/pos-graduacao/educacao-em-direitos-humanos" title="">Educação em direitos humanos</a></li>
                        <li><a href="/pos-graduacao/filosofia" title="">Filosofia</a></li>
                        <li><a href="/pos-graduacao/ciencias-e-10" title="">Ciências é 10</a></li>
                        <li><a href="/pos-graduacao/artes" title="">Artes</a></li>
                        <li><a href="/pos-graduacao/EducacaoFisicaEscolar" title="">Educação física escolar</a></li>

                    </ul>
                </section>

            </div>


        </div>



        <!-- this div contains the footers menu and social medias-->
        <div class="medias&menu">

            <ul class="menu-footer">

            </ul>

            <ul class="medias-footer">
                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/face.svg" alt="">
                    </a>
                </li>

                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/insta.svg" alt="">
                    </a>
                </li>

                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/youtube.svg" alt="">
                    </a>
                </li>

                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/wapp.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/email.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/phone.svg" alt="">
                    </a>
                </li>

                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/print.svg" alt="">
                    </a>
                </li>

            </ul>


        </div>




        <div class="copy">
            <span class=""><?php echo date('Y'); ?> - Polo Universitário de Sapiranga.</span>
        </div>
    </footer>


    <!-- Fires the wp_footer action. This is one of the most important hooks, many plugins will not
     work without it. It needs to be called in the theme footer, in footer.php file. -->
    <?php wp_footer(); ?>

    <!-- Resource vlibra -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>

    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>

    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    </body>

    </html>