<?php
// Template Name:contato
?>

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <!-- the contend must be here -->
        <div class="section container">
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
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/whats.svg" alt="whatsapp Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- email -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/email.svg" alt="email Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- print -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/print.svg" alt="Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- tittle -->
            <div class="title-section">
                <h4>Nossos canais de atendimento</h4>
                <ul>
                    <li>
                        <span>
                            Nesta sessão você encontra, nossas formas de contato e a localização do Polo UAB Sapiranga. Para dúvidas, acesse nossa página de perguntas frequêntes
                            <a href="/polouabsapiranga/faq" target="_blank" rel="noopener noreferrer">FAQ</a>.
                        </span>
                    </li>
                </ul>
            </div>


        </div>

        <!-- page contend -->
        <section class="main-page bg-contato">

            <div class="wrapper-address">

                <div class="polo-address">

                    <!-- Street Name -->
                    <div class="item-address">
                        <span class="address-title">Endereço</span>
                        <span class="address-description">Rua Padre Réus, 263 - Centro
                            Sapiranga - RS, 93815-016</span>
                    </div>

                    <!-- opening hours -->
                    <div class="item-address">
                        <span class="address-title">Horários de atendimento</span>
                        <span class="address-description">Tarde:<br>13h as 18h30 ( Segunda a Sexta ) </span>
                        <span class="address-description">Noite:<br>18h30 ás 22h ( Segunda a Sexta )</span>
                    </div>

                    <!-- the team -->
                    <div class="item-address">
                        <span class="address-title">Equipe do Polo UAB Sapiranga</span>
                        <ul>
                            <li>
                                <span class="address-description">Elisabete Bisuti Ceron - Coordenadora do Polo<br>
                                    <a href="mailto:elisabete.pead@gmail.com">elisabete.pead@gmail.com</a></span>
                            </li>
                            <li>
                                <span class="address-description">Taciano Taschetto - Secretário<br>
                                    <a href="mailto:taciano@sapiranga.rs.gov.br">taciano@sapiranga.rs.gov.br</a> </span>
                            </li>
                        </ul>
                    </div>

                    <!--phone-->
                    <div class="item-address">
                        <span class="address-title">Telefone</span>
                        <span class="address-description">3599-9616 Ramal, 316</span>
                    </div>


                    <!--email-->
                    <div class="item-address">
                        <span class="address-title">E-mail</span>
                        <span class="address-description"><a href="mailto:poloead@sapiranga.rs.gov.br">poloead@sapiranga.rs.gov.br</a></span>
                    </div>
                </div>

                <div class="polo-map">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3467.7806417270012!2d-51.006344784894466!3d-29.63911368203156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95193f29215994c3%3A0x8f77ee6b5845ad9!2sPolo%20Universit%C3%A1rio%20de%20Sapiranga!5e0!3m2!1spt-BR!2sbr!4v1671730623189!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>


        <div class="related-itens container">
            <h4>Itens relacionados</h4>
        </div>





<?php
    }
}
?>
<?php get_footer(); ?>