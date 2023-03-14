<?php
// Template Name: Letras-Espanhol-UFPel
?>


<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>


        <!-- social medias top side bar -->
        <div class="section container">

            <!-- breadcrumb -->
            <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

            <!-- import the social medias template -->
            <?php get_template_part('template-parts/social-medias'); ?>

            <!-- tittle -->
            <div class="title-section courses">
                <h4>Letras Espanhol - UFPel</h4>
                <ul>
                    <li>
                        <span>
                            Curso de licenciatura em Letras Espanhol - UFPel.
                        </span>
                    </li>
                </ul>
            </div>


            <section class="main-page">
                <div class="container contend-section-course">
                    <h4 class="intro-curse-title">Sobre o Curso</h4>
                    <p class="text mininal-detail">
                        <span class="vertical">Graduação - Licenciatura</span>

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