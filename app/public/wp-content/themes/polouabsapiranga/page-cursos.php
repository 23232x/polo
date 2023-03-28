<?php
// Template Name: Cursos
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
                <h4><?php the_cmb2field('title_page_cursos');?></h4>
                <ul>
                    <li>
                        <span><?php the_cmb2field('subtitle_page_cursos');?></span>
                    </li>
                </ul>
            </div>
            <div class="contend-section">
                <p class="text wrapper"></p>
            </div>
        </section>


        <!-- page contend -->
        <section class="main-page bg library">
            <!--#################################-->
            <!--########### GRADUAÇÃO #########-->
            <!--#################################-->
            <div class="container wraper-contend-section">            
                <div class="library-titles">
                    <h4><?php the_cmb2field('title_gradu_section');?></h4>
                    <p><?php the_cmb2field('subtitle_gradu_section');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('title_gradu_section');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $cursos_gradu = get_cmb2field('cursos_gradu');
                                    if (isset($cursos_gradu)) {
                                        foreach ($cursos_gradu as $gradu) { ?>
                                        <a href="<?php echo $gradu['course_gradu_link']?>" target="_blank">
                                            <p title="<?php echo $gradu['course_gradu_name']?>"><?php echo $gradu['course_gradu_name']?></p>
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



            <!--#################################-->
            <!--########### PÓSGRADUAÇÃO #########-->
            <!--#################################-->
            <div class="container wraper-contend-section">            
                <div class="library-titles">
                    <h4><?php the_cmb2field('title_pos_section');?></h4>
                    <p><?php the_cmb2field('subtitle_pos_section');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('title_pos_section');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $cursos_pos = get_cmb2field('cursos_pos');
                                    if (isset($cursos_pos)) {
                                        foreach ($cursos_pos as $pos) { ?>
                                        <a href="<?php echo $pos['course_pos_link']?>" target="_blank">
                                            <p title="<?php echo $pos['course_pos_name']?>"
                                            >
                                            <?php echo $pos['course_pos_name']?>
                                        </p>
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



            <!--#################################-->
            <!--########### TECNICOS ############-->
            <!--#################################-->
            <div class="container wraper-contend-section">            
                <div class="library-titles">
                    <h4><?php the_cmb2field('title_tec_section');?></h4>
                    <p><?php the_cmb2field('subtitle_tec_section');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                <ul class="ul-accordion">
                            <li>
                            <button class="accordion">
                                <h3><?php the_cmb2field('title_tec_section');?></h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                             </button>
                               
                                <div class="panel">
                                <?php $cursos_tec = get_cmb2field('cursos_tec');
                                    if (isset($cursos_tec)) {

                                   foreach ($cursos_tec as $tec) { ?>
                                        <a href="<?php echo $tec['course_tec_link']?>" target="_blank">
                                            <p title="<?php echo $tec['course_pos_name'] ?>"><?php echo $tec['course_pos_name']?></p>
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

