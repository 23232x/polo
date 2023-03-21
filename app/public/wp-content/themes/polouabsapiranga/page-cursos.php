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

            <!--##########  COURSES: graduacao #########-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('title_gradu')?></h4>
                    <p><?php the_cmb2field('subtitle_gradu')?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link1">
                            <h4 class="title-type">Graduação</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>

                     <ul id="listlk1" style="display:none;">                                              
                          <?php $cursos_gradu = get_cmb2field('cursos_gradu');
                            if(isset($cursos_gradu)){ foreach($cursos_gradu as $gradu){?>
                            <li><a href="<?php echo $gradu['course_gradu_link'];?>" target="_blank"><?php echo $gradu['course_gradu_name'];?></a><span class="status"><?php echo $gradu['course_gradu_state'];?></span></li>
                        <?php
                          }}
                        ?>
                    </ul>

                    </div>
                </div>
            </div>


            <!-- ########## COURSES: pos-graduacao  #######-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('title_section_pos')?></h4>
                    <p><?php the_cmb2field('subtitle_section_pos');?>.</p>
                </div>
                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link2">
                            <h4 class="title-type">Pós Graduação</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk2" style="display: none;">
                        <?php $cursos_pos = get_cmb2field('cursos_pos');
                            if(isset($cursos_pos)){ foreach($cursos_pos as $pos){?>                           
                                <li><a href="<?php echo $pos['course_pos_link']?>"target="_blank">
                                    <?php echo $pos['course_pos_name']?></a>
                                    <span class="status"><?php echo $pos['course_pos_state']?></span>
                                </li>                            
                            <?php
                                }
                            }?>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- ########## COURSES: tecnicos  #######-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('title_section_tec');?></h4>
                    <p><?php the_cmb2field('subtitle_section_tec');?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link3">
                            <h4 class="title-type">técnicos</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk3" style="display: none;">
                        <?php $cursos_tec = get_cmb2field('cursos_tec');
                            if(isset($cursos_tec)){ foreach($cursos_tec as $tec){?> 
                        <li>
                            <a href="<?php echo $tec['course_tec_link']?>" target="_blank"><?php echo $tec['course_tec_name']?></a>
                            <span class="status"><?php echo $tec['course_tec_state']?></span>
                        </li>
                        <?php
                            }
                        }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>



            <!-- ########## COURSES: Cursos FIC - IFSUL:  #######-->
            <div class="container wraper-contend-section">
                <div class="library-titles">
                    <h4><?php the_cmb2field('title_section_fic');?></h4>
                    <p><?php the_cmb2field('subtitle_section_fic')?></p>
                </div>

                <!-- this div contais the hole links for the library -->
                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <button class="link-title" id="link4">
                            <h4 class="title-type">Cursos Fic</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </button>
                        <ul id="listlk4" style="display: none;">                            
                        <?php $cursos_fic = get_cmb2field('cursos_fic');
                            if(isset($cursos_fic)){ foreach($cursos_fic as $fic){?>                        
                        <li>
                            <a href="<?php echo $fic['course_fic_link']?>" target="_blank" title="<?php echo $fic['course_fic_name']?>">
                                 <?php echo $fic['course_fic_name']?>
                            </a>
                            <span class="status"><?php echo $fic['course_fic_state'] ?></span>
                        </li>                        
                        <?php
                        }
                       }?>
                    
                    </ul>
                    </div>
                </div>
            </div>





        </section>

<?php endwhile;
else : endif ?>
<?php get_footer(); ?>




<script>
    // ########## block links 1 #############
    var lk1 = document.getElementById("link1");
    lk1.addEventListener("click", function() {
        var list1 = document.getElementById("listlk1");
        if (list1.classList.contains("swanw") && lk1.classList.contains("on")) {
            list1.classList.remove("swanw");
            lk1.classList.remove("on");
        } else {
            list1.classList.add("swanw");
            lk1.classList.add("on");
        }
    });


    // ########## block links 2 #############
    var lk2 = document.getElementById("link2");

    lk2.addEventListener("click", function() {

        var list2 = document.getElementById("listlk2");
        if (list2.classList.contains("swanw") && lk2.classList.contains("on")) {
            list2.classList.remove("swanw");
            lk2.classList.remove("on");
        } else {
            list2.classList.add("swanw");
            lk2.classList.add("on");
        }
    });



    // ########## block links 3 #############
    var lk3 = document.getElementById("link3");

    lk3.addEventListener("click", function() {

        var list3 = document.getElementById("listlk3");
        if (list3.classList.contains("swanw") && lk3.classList.contains("on")) {
            list3.classList.remove("swanw");
            lk3.classList.remove("on");
        } else {
            list3.classList.add("swanw");
            lk3.classList.add("on");
        }
    });

    // ########## block links 4 #############
    var lk4 = document.getElementById("link4");

    lk4.addEventListener("click", function() {
        var list4 = document.getElementById("listlk4");
        if (list4.classList.contains("swanw") && lk4.classList.contains("on")) {
            list4.classList.remove("swanw");
            lk4.classList.remove("on");
        } else {
            list4.classList.add("swanw");
            lk4.classList.add("on");
        }
    });
</script>