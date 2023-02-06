<?php
// Template Name: MultimeiosDidaticos
?>
<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <!-- social medias top side bar -->
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

            <!-- breadcrumb -->
            <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

            <!-- tittle -->
            <div class="title-section courses">
                <h4>Multimeios didáticos</h4>
                <ul>
                    <li>
                        <span>
                            Multimeios didáticos - IFSUL
                        </span>
                    </li>
                </ul>
            </div>

            <section class="main-page">
                <div class="container contend-section-course">
                    <h4 class="intro-curse-title">Sobre o Curso</h4>
                    <p class="text mininal-detail">
                        <span class="vertical">Técnico</span>

                        O profissional concluinte do Curso Técnico em Multimeios Didáticos, na modalidade a distância, integrante do PROFUNCIONÁRIO, oferecido pelo IFSul, deve apresentar um perfil de egresso que o habilite a desempenhar atividades voltadas para a atuação em Multimeios Didáticos, na área de Desenvolvimento Educacional e Social

                        Campo de atuação
                        Escolas públicas e privadas, centros de formação profissional, centros de capacitação de pessoal, órgãos de sistemas e redes de ensino.
                    </p>
                    <p class="text" style="padding-left: 6rem;">Acesse o <a href="http://ead.ifsul.edu.br/index.php/cursos?id=190" target="_blank">Site </a> Oficial do curso e veja a grade curricular completa.</p>
            </section>
        </div>


<?php
    }
}
?>
<?php get_footer(); ?>