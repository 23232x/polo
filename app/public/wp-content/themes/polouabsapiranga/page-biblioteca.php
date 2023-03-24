<?php
// Template Name: Biblioteca
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- conteúdo da página vai aqui -->


        <section class="section container">

            <!-- breadcrumb -->
            <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

            <!-- import the social medias template -->
            <?php get_template_part('template-parts/social-medias'); ?>

            <!-- tittle -->
            <div class="title-section">
                <h4><?php the_cmb2field('title_library_page')?></h4>
                <ul>
                    <li>
                        <span><?php the_cmb2field('subtitle_library_page'); ?></span>
                    </li>
                </ul>
            </div>

            <div class="contend-section">
                <p class="text wrapper"></p>
            </div>
        </section>


        <!-- page contend -->
        <section class="main-page bg library">

            <!--########## vt libraty 01 #########-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('collection_title_library');?></h4>
                    <p><?php the_cmb2field('collection_subtitle_library');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('collection_title_library');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $librarys = get_cmb2field('librarys');
                                    if (isset($librarys)) {

                                   foreach ($librarys as $li) { ?>
                                        <a href="<?php echo $li['collection_item_link']?>" target="_blank">
                                         <p title="<?php echo $li['collection_item_title'] ?>"><?php echo $li['collection_item_title']?></p>
                                    </a>
                                    <?php
                                     }
                                    }
                                     ?>   
                                
                            </div>                               
                            </li>
                 
                </ul>
                </div>
            </div>

            <!-- ########## REPOSITÓRIOS INSTITUCIONAIS   #######-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('repo_title');?></h4>
                    <p><?php the_cmb2field('repo_subtitle');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('repo_title');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $repos = get_cmb2field('repos');
                                    if (isset($repos)) {

                                   foreach ($repos as $repo) { ?>
                                   
                                   <a href="<?php echo $repo['repo_item_link']?>" target="_blank">
                                      <p title="<?php echo $repo['repo_item_title'] ?>"><?php echo $repo['repo_item_title']?></p>
                                   </a>
                                    <?php
                                     }
                                    }
                                     ?>   
                                
                            </div>                               
                            </li>
                 
                </ul>
                </div>
            </div>



            <!--############# BIBLIOTECAS DIGITAIS #############-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('digi_bible_title');?></h4>
                    <p><?php the_cmb2field('digi_bibli_subtitle');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container teste">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion library">
                                <h3><?php the_cmb2field('digi_bible_title');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $digi_biblis = get_cmb2field('digi_biblis');
                                    if (isset($digi_biblis)) {

                                   foreach ($digi_biblis as $digi) { ?>
                                   
                                   <a href="<?php echo $digi['digi_bibli_item_link']?>" target="_blank"> <p title="<?php echo $digi['digi_bibli_item_title'] ?>"><?php echo $digi['digi_bibli_item_title']?></p>
                                    </a>
                                    <?php
                                     }
                                    }
                                ?>                               
                            </div>                               
                            </li>
                 
                </ul>
                </div>
            </div>


            <!-- ########### PORTAL DE PERIÓDICOS ##########-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('periodico_title_page');?></h4>
                    <p><?php the_cmb2field('periodico_subtitle_page');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('digi_bible_title');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $peris = get_cmb2field('peris');
                                    if (isset($peris)) {
                                   foreach ($peris as $peri) { ?>                                   
                                   <a href="<?php echo $peri['peri_item_link']?>" target="_blank"> <p title="<?php echo $peri['peri_item_title'] ?>"><?php echo $peri['peri_item_title']?></p>
                                    </a>
                                    <?php
                                     }
                                    }
                                     ?>   
                                
                            </div>                               
                            </li>
                 
                </ul>
                </div>
            </div>



            <!--######## MATEMATICA ###########-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('math_title_section');?></h4>
                    <p><?php the_cmb2field('math_subtitle_section');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('math_title_section');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $maths = get_cmb2field('maths');
                                    if (isset($maths)) {
                                   foreach ($maths as $math) { ?>                                   
                                   <a href="<?php echo $math['math_item_link']?>" target="_blank"> <p title="<?php echo $math['math_item_title'] ?>"><?php echo $math['math_item_title']?></p>
                                    </a>
                                    <?php
                                     }
                                    }
                                     ?>   
                                
                            </div>                               
                            </li>
                 
                </ul>
                </div>
            </div>


            <!--########## FILOSOFIA ############-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('filo_title_section');?></h4>
                    <p><?php the_cmb2field('filo_subtitle_section');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('filo_title_section');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $filos = get_cmb2field('filos');
                                    if (isset($filos)) {
                                   foreach ($filos as $filo) { ?>                                   
                                   <a href="<?php echo $filo['filo_item_link']?>" target="_blank"> <p title="<?php echo $filo['filo_item_title'] ?>"><?php echo $filo['filo_item_title']?></p>
                                    </a>
                                    <?php
                                     }
                                    }
                                     ?>   
                                
                            </div>                               
                            </li>
                 
                </ul>
                </div>
            </div>


            <!--####### CIÊNCIAS DA INFORMAÇÃO #######-->
          <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('info_title_section');?></h4>
                    <p><?php the_cmb2field('info_subtitle_section');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('info_title_section');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $infos = get_cmb2field('infos');
                                    if (isset($infos)) {
                                   foreach ($infos as $info) { ?>                                   
                                   <a href="<?php echo $info['info_item_link']?>" target="_blank"> <p title="<?php echo $info['info_item_title'] ?>"><?php echo $info['info_item_title']?></p>
                                    </a>
                                    <?php
                                     }
                                    }
                                     ?>   
                                
                            </div>                               
                            </li>                 
                </ul>
                </div>
            </div>

            <!--############ PEDAGOGIA ###############-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('peda_title_section');?></h4>
                    <p><?php the_cmb2field('peda_subtitle_section');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('peda_title_section');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $pedagos = get_cmb2field('pedagos');
                                    if (isset($pedagos)) {
                                   foreach ($pedagos as $peda) { ?>                                   
                                   <a href="<?php echo $peda['peda_item_link']?>" target="_blank"> <p title="<?php echo $peda['peda_item_title'] ?>"><?php echo $peda['peda_item_title']?></p>
                                    </a>
                                    <?php
                                     }
                                    }
                                     ?>   
                                
                            </div>                               
                            </li>                 
                </ul>
                </div>
            </div>

            <!-- ######### EDUCAÇÃO EM SAÚDE #########-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('edu_title_section');?></h4>
                    <p><?php the_cmb2field('edu_subtitle_section');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('edu_title_section');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $edus = get_cmb2field('edus');
                                    if (isset($edus)) {
                                   foreach ($edus as $edu) { ?>                                   
                                   <a href="<?php echo $edu['edu_item_link']?>" target="_blank"> <p title="<?php echo $edu['edu_item_title'] ?>"><?php echo $edu['edu_item_title']?></p>
                                    </a>
                                    <?php
                                     }
                                    }
                                     ?>   
                                
                            </div>                               
                            </li>                 
                </ul>
                </div>
            </div>


            <!--############ Recursos Educacionais Abertos ################ -->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('recu_edu_title_section');?></h4>
                    <p><?php the_cmb2field('recu_edu_subtitle_section');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('recu_edu_title_section');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $recu_edus = get_cmb2field('recu_edus');
                                    if (isset($recu_edus)) {
                                   foreach ($recu_edus as $recu_edu) { ?>                                   
                                   <a href="<?php echo $recu_edu['recu_edu_item_link']?>" target="_blank"> <p title="<?php echo $reco_edu['recu_edu_item_title'] ?>"><?php echo $recu_edu['recu_edu_item_title']?></p>
                                    </a>
                                    <?php
                                     }
                                    }
                                     ?>   
                                
                            </div>                               
                            </li>                 
                </ul>
                </div>
            </div>





        </section>

<?php endwhile;
else : endif ?>
<?php get_footer(); ?>




<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
</script>