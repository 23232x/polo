<?php
// Template Name: Pedagogia-UFPel
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


            <!--------------------- Pedagogia UFRGS ------------------->
            <!-- tittle -->
            <div class="title-section courses">
                <h4>Pedagogia - UFPel</h4>
                <ul>
                    <li>
                        <span>
                            Curso de licenciatura em Pedagogia - UFPel.
                        </span>
                    </li>
                </ul>
            </div>


            <section class="main-page">
                <div class="container contend-section-course">
                    <h4 class="intro-curse-title">Sobre o Curso</h4>
                    <p class="text mininal-detail">
                        <span class="vertical">Graduação - Licenciatura</span>

                        O PEAD/FACED/UFRGS (Edição que ocorreu de 2014 a 2020) é um CURSO DE GRADUAÇÃO EM PEDAGOGIA, LICENCIATURA A DISTÂNCIA, para professores em exercício, tomando como base as Diretrizes Curriculares Nacionais para os cursos de Licenciatura (BRASIL, 2002), explicitadas nas Resoluções do Conselho Nacional de Educação – CNE/CP nº 1/2002 e CNE/CP nº 2/2002 – na regulamentação, no âmbito da FACED/UFRGS, feita pelo Conselho de Ensino, Pesquisa e Extensão (CEPE), através da Resolução nº 04/2004 e tendo em vista as Diretrizes Curriculares Nacionais para o Curso de Pedagogia, publicadas no Diário Oficial da União em 15 de maio de 2006.
                    </p>
                    <p class="text" style="padding-left: 6rem;">Acesse o <a href="google.com" target="_blank">Site </a> Oficial do curso e veja a grade curricular completa.</p>

            </section>



            <!--------------------- Pedagogia UFPel ------------------->
            <!-- tittle -->
            <div class="title-section courses">
                <h4> Pedagogia UFPel</h4>
                <ul>
                    <li>
                        <span>
                            Curso de licenciatura em Pedagogia UFRGS.
                        </span>
                    </li>
                </ul>
            </div>


            <section class="main-page">
                <div class="container contend-section-course">
                    <h4 class="intro-curse-title">Sobre o Curso</h4>
                    <p class="text mininal-detail">
                        <span class="vertical">Graduação - Licenciatura</span>

                        O PEAD/FACED/UFRGS (Edição que ocorreu de 2014 a 2020) é um CURSO DE GRADUAÇÃO EM PEDAGOGIA, LICENCIATURA A DISTÂNCIA, para professores em exercício, tomando como base as Diretrizes Curriculares Nacionais para os cursos de Licenciatura (BRASIL, 2002), explicitadas nas Resoluções do Conselho Nacional de Educação – CNE/CP nº 1/2002 e CNE/CP nº 2/2002 – na regulamentação, no âmbito da FACED/UFRGS, feita pelo Conselho de Ensino, Pesquisa e Extensão (CEPE), através da Resolução nº 04/2004 e tendo em vista as Diretrizes Curriculares Nacionais para o Curso de Pedagogia, publicadas no Diário Oficial da União em 15 de maio de 2006.
                    </p>
                    <p class="text" style="padding-left: 6rem;">Acesse o <a href="google.com" target="_blank">Site </a> Oficial do curso e veja a grade curricular completa.</p>

            </section>

        </div>








<?php
    }
}
?>
<?php get_footer(); ?>