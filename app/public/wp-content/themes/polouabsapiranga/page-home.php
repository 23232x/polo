<?php // Template Name: Pagina-inicial 
?>

<!-- importa o header -->
<?php get_header(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

<!-- faz o LOOP principal -->
<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>


        <!-- all the contend page goes here -->
        <main>
            <section class="main-hero">
                <div class="container">
                    <p class="text-intro">
                        <!-- CMB2 get Field  -->
                        <?php the_cmb2field('intro_text'); ?>
                    </p>

                    <div class="pesquisa">
                        
                    <div class="pesquisa-item find">
                        <span class="find-course">Encontre um curso</span>
                        <!-- this div contais the search form -->
                            <div class="search_form">
                                <?php get_template_part('template-parts/searchform_home'); ?>
                            </div>
                    </div>

                        <div class="pesquisa-item see-all">
                            <span class="ou">ou</span>
                            <a href="/Cursos" class="see-all-courses" id="right-hover">veja todos os cursos<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/right-thin.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- and now the cool swiper goes down here -->
            <div class="swiper mySwiper">
                <!-- <div class="swiper-pagination"></div> -->

                <div class="swiper-wrapper">

                    <?php $slides = get_cmb2field('slides');
                    if(isset($slides)){ foreach($slides as $slide){?>
                    
                    <div class="swiper-slide">
                    <div class="slide-item">
                            <!-- 1º colunm -->
                            <div class="slide-item-left">                                
                            <h4><?php echo $slide['titulo'];?></h4>
                            <h2><?php echo $slide['subtitulo'];?></h2>
                            <p><?php echo $slide['descricao'];?></p>
                            <a class="btn-hero" href="">Saiba mais</a>
                            </div>

                            <!-- 2º colunm -->
                            <div class="slide-item-right">                                                            
                            <!-- photo goes here -->                            
                            </div>
                        </div>                       
                  </div>
                    
                  <?php
                        }
                    }?>


                </div>

                <div class="wrapper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>



            </div>
            <!-- this section contains the universety partner of polo UAB Sapiranga -->

            <section class="partners container">
                <h4 class="title-section">
                    Instituiçoes parceiras
                </h4>
                <ul>
                    <li><a href="https://www.gov.br/capes/pt-br" target="_blank" title="CAPES"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/capes-uab.png" alt=""></a></li>
                    <li><a href="https://www.furg.br/en/" target="_blank" title="Universidade Federal do Rio Grande"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/furg.png" alt="Universidade Federal do Rio Grande"></a></li>
                    <li><a href="http://www.ifsul.edu.br/" target="_blank" title="IFSUL"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ifsul.png" alt=""></a></li>
                    <li><a href="https://sapiranga.atende.net/" target="_blank" title="Prefeitura Municipal de Sapiranga"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/pms.png" alt=""></a></li>
                    <li><a href="http://portal.mec.gov.br/politica-de-educacao-inclusiva?id=12265" target="_blank" title="Universidade aberta do Brasil (UAB)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/uab.png" alt=""></a></li>
                    <li><a href="https://portal.ufpel.edu.br/" target="_blank" title="Universidade Federal de Pelotas"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ufpel.png" alt=""></a></li>
                    <li><a href="http://www.ufrgs.br/ufrgs/inicial" target="_blank" title="Universidade Federal do Rio Grande do Sul"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ufrgs.png" alt=""></a></li>
                    <li><a href="https://www.ufsm.br/" target="_blank" title="Universidade Federal de Santa Maria"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ufsm.png" alt=""></a></li>
                    <li><a href="https://unipampa.edu.br/portal/" target="_blank" title="Universidade Federal do Pampa"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/unipampa.png" alt=""></a></li>
                </ul>
            </section>
        </main>

        <!-- fim do loope principal -->
<?php
    }
} ?>


<!-- importa o footer -->
<?php get_footer(); ?>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>


<!-- <script>
    var seta = document.getElementById("right-hover");
    seta.addEventListener("mouseover", function() {
if)
});
</script> -->