<?php
// Template Name: Editais
?>



<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <section class="section container">

                        <!-- breadcrumb -->
                        <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

                        <!-- import the social medias template -->
                        <?php get_template_part('template-parts/social-medias'); ?>

                        <!-- tittle -->
                        <div class="title-section">
                                <h4>Editais Polo UAB Sapiranga</h4>
                                <ul>
                                        <li>
                                                <span>
                                                        Nesta sessão você encontra, todos os editais relacionados ao cursos do polo UAB de sapiranga.
                                                        <a href="/polouabsapiranga/faq" target="_blank" rel="noopener noreferrer">FAQ</a>.
                                                </span>
                                        </li>
                                </ul>
                        </div>

                        <section class="main-page editais">
                                <div class="edital-item">
                                        <button class="edital-title">Edital de seleção para tutor presencial de pedagogia. <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/general/edital-arrow.svg" alt=""></button>
                                        <div class="edital-contente" style>
                                                <span class="data-title">Dada da publicação:
                                                        <span class="data-day">
                                                                <?php echo date(get_option('date_format')); ?>
                                                        </span>
                                                </span>
                                                <p class="contente-description">
                                                        A Universidade Federal do Rio Grande – FURG, por meio da Secretaria de Educação a Distância - SEaD, no uso de suas atribuições, torna pública a abertura das inscrições para a seleção de bolsista UAB/CAPES, para TUTORIA no âmbito do Sistema Universidade Aberta do Brasil – UAB. Os bolsistas selecionados atuarão no apoio ao curso LICENCIATURA EM PEDAGOGIA.
                                                </p>
                                                <span class="inscricao-data">Inscrições: <span class="data-day"> 10/02/2023 a 14/02/2023</span></span>
                                                <span class="mais-info"></span>
                                                <img id="getinfo" title="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons">
                                        </div>
                                </div>
                        </section>


                        <div class="search-on-page">
                                <?php get_search_form(); ?>
                        </div>

                </section>




<?php endwhile;
else : endif ?>
<?php get_footer(); ?>