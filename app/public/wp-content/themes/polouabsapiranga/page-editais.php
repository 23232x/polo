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
                                <h4><?php the_cmb2field('contact_title')?></h4>
                                <ul>
                                    <li>
                                       <span>
                                       <?php the_cmb2field('contact_subtitle')?>                                      
                                        <!-- <a href="/polouabsapiranga/faq" target="_blank" rel="noopener noreferrer">FAQ</a>. -->
                                        </span>
                                   </li>
                                </ul>
                        </div>

                        
                        
                        <section class="main-page editais">
                               
                        <!-- a iteração inicia aqui -->

                        <?php
                         $editais = get_cmb2field('editais');
                         if(isset($editais)){ foreach($editais as $edital){?>
                                
                           
                        
                            <div class="edital-item">
                                        <button class="edital-title"><?php echo $edital['edital_title'];?>. <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/general/edital-arrow.svg" alt=""></button>
                                        <div class="edital-contente" style>
                                                <span class="data-title">Dada da publicação:
                                                        <span class="data-day">
                                                           <!-- Data de publicação -->
                                                        <?php echo date(get_option('date_format')); ?>
                                                        </span>
                                                </span>
                                                <!-- Descrição do edital -->
                                                <p class="contente-description">
                                                <?php echo $edital['edital_description'];?>
                                                </p>

                                                <span class="inscricao-data">Inscrições: <span class="data-day">  <?php echo $edital['edital_date_start'];?> a <?php echo $edital['edital_date_end']?></span></span>
                                                <span class="mais-info">Mais informações: <a href="<?php echo $edital['more_info'];?>">Acesse aqui.</a></span>
                                                <img id="getinfo" title="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons">
                                        </div>
                                </div>
                        
                        <?php
                        }}
                        ?>
                        
                        </section>


                        <div class="search-on-page">
                                <?php get_search_form(); ?>
                        </div>

                </section>




<?php endwhile;
else : endif ?>
<?php get_footer(); ?>








                            