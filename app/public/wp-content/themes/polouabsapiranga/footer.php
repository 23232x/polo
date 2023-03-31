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
                    Oferecemos mais de 30 cursos, nos níveis técnico,
                    graduação e pós-graduação. Veja a listagem de cursos completa <a href="/polouabsapiranga/cursos">aqui.</a>
                </p>
            </div>


            <div class="footer-courses">

                <!-- TÉCNICOS -->
                <section class="footer-course">
                    <h4>Técnicos</h4>
                    <ul>
                        <li><a href="/alimentacao-escolar-ifsul" title="Curso de Filosofia">Alimentação Escolar - IFSUL</a></li>
                        <li><a href="/tecnicos/infraestrutura-escolar-ifsul" title="Infraestrutura Escolar - IFSUL">Infraestrutura Escolar - IFSUL</a></li>
                        <li><a href="/tecnicos/secretaria-escolar-ifsul" title="Secretaria Escolar - IFSUL">Secretaria Escolar - IFSUL</a></li>
                        <li><a href="/tecnicos/multimeios-didaticos-ifsul" title="Multimeios didáticos - IFSUL">Multimeios didáticos - IFSUL</a></li>
                    </ul>
                </section>

                <!-- GRADUAÇÃO -->
                <section class="footer-course">
                    <h4>Graduação</h4>
                    <ul>
                        <li><a href="/graduacao/geografia-ufsm" title="Geografia UFSM">Geografia UFSM</a></li>
                        <li><a href="/graduacao/pedagogia-ufpel" title="Pedagogia UFPel">Pedagogia UFPel</a></li>
                        <li><a href="/graduacao/pedagogia-ufrgs" title="Pedagogia UFRGS">Pedagogia UFRGS</a></li>
                        <li><a href="/graduacao/tecnologia-em-sistemas-para-a-internet-ifsul" title="Tecnologia em Sistemas para a Internet - IFSUL">Tecnologia em Sistemas para a Internet - IFSUL</a></li>
                        <!-- repetat here -->

                        <li><a href="/graduacao/licenciatura-em-filosofia-ufpel" title="icenciatura em Filosofia - UFPel">Licenciatura em Filosofia - UFPel</a></li>
                        <li><a href="/graduacao/filosofia" title="Filosofia UFPel">Filosofia UFPel</a></li>
                        <li><a href="/historia-furg" title="História FURG">História FURG</a></li>
                        <li><a href="/licenciatura-em-historia-ufpel" title="Licenciatura em História - UFPel">Licenciatura em História - UFPel</a></li>

                    </ul>
                </section>

                <!-- PÓS GRADUAÇÃO -->
                <section class="footer-course">
                    <h4>Pós-Graduação</h4>
                    <ul>
                        <li><a href="/gestao-da-educacao-ufrgs" title="Gestão da Educação - UFRGS">Gestão da Educação - UFRGS</a></li>
                        <li><a href="/educacao-em-direitos-humanos-furg" title="Educação em direitos humanos">Educação em direitos humanos</a></li>
                        <li><a href="/filosofia-ufpel" title="Filosofia - UFPel">Filosofia - UFPel</a></li>
                        <li><a href="/ciencias-e-10-furg" title="Ciências é 10">Ciências é 10</a></li>
                        <li><a href="/artes-ufpel" title="Artes - UFPel">Artes - UFPel</a></li>
                        <li><a href="/educacao-fisica-escolar-ufpel" title="Educação Física Escolar - UFPel">Educação Física Escolar - UFPel</a></li>

                    </ul>
                </section>
            </div>
        </div>



        <!-- this div contains the footers menu and social medias-->
        <div class="medias-menu container">

            <!--the main menu  -->
            <ul class="menu-footer">
                <li><a href="/">Home</a></li>
                <li><a href="/polouabsapiranga/Sobre">Sobre</a></li>
                <li><a href="/polouabsapiranga/Cursos">Cursos</a></li>
                <li><a href="/polouabsapiranga/Editais">Editais</a></li>
                <li><a href="/polouabsapiranga/Biblioteca">Biblioteca</a></li>
                <li><a href="/polouabsapiranga/Contato">Contato</a></li>
                <li><a href="/polouabsapiranga/FAQ">FAQ</a></li>
            </ul>

            <!-- social medias -->
            <ul class="medias-footer">
                <li>
                    <a href="https://pt-br.facebook.com/polouniversitariosapiranga/" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/face.svg" alt="">
                    </a>
                </li>

                <li>
                    <a href="https://www.instagram.com/polouniversitario_sapiranga/?igshid=YmMyMTA2M2Y%3D" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/insta.svg" alt="">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/youtube.svg" alt="">
                    </a>
                </li>

                <li>
                    <a href="https://wa.me/5551986780014?text=ola">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/wapp.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="mailto:poloead@sapiranga.rs.gov.br?subject=ola%20polo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/email.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="tel:+555135999616">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/phone.svg" alt="">
                    </a>
                </li>

                <li>
                    <a href="#" onclick="window.print();">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-footer/print.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>

        <div class="line"></div>


        <!-- copy-rigths php function -->
        <span class="copy"><?php echo date('Y'); ?> - Polo Universitário UAB de Sapiranga.</span>

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