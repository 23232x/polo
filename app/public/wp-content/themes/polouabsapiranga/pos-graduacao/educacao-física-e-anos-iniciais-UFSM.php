<?php
// Template Name: Educacao-fisica-e-anos-iniciais-UFSM
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
                <h4>Educação Física e Anos Iniciais</h4>
                <ul>
                    <li>
                        <span>
                            Curso de Pós Graduação em Educação Física e Anos Iniciais - UFSM.
                        </span>
                    </li>
                </ul>
            </div>

            <section class="main-page">
                <div class="container contend-section-course">
                    <h4 class="intro-curse-title">Sobre o Curso</h4>
                    <p class="text mininal-detail">
                        <span class="vertical">Pós Graduação</span>

                        O Curso proposto pela Universidade Federal de Pelotas
                        vem ao encontro da necessidade de formação de professores em língua estrangeira
                        para atender à demanda da Lei de Diretrizes e Bases da Educação (LDB), e assim criar
                        novas pontes no processo educativo de alunos de 3º grau.
                        O Curso foi idealizado em 2005 e teve seu Projeto Pedagógico aprovado pelo MEC em 2008, com inauguração
                        no segundo semestre do ano seguinte. A iniciativa tem como objetivo a formação
                        de professores habilitados no domínio dos princípios técnico-metodológicos de
                        ensino da língua espanhola como língua estrangeira, nas modalidades presencial
                        e a distância, ampliando suas perspectivas de atuação num mercado de trabalho
                        cada vez mais baseado nas novas tecnologias da informação e da comunicação.
                        Dessa maneira, o curso visa não somente à preparação de professores de espanhol,
                        mas também à inovação no processo de formação docente, ao utilizar uma plataforma de EAD – Educação à Distância, potencializando o espaço e o tempo, permitindo a experiência e a formação em ambientes digitais.
                    </p>
                    <p class="text" style="padding-left: 6rem;">Acesse o <a href="google.com" target="_blank">Site </a> Oficial do curso e veja a grade curricular completa.</p>
            </section>
        </div>
<?php
    }
}
?>
<?php get_footer(); ?>