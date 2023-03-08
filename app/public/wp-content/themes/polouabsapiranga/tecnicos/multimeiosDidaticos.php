<?php
// Template Name: MultimeiosDidaticos-IFSUL
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