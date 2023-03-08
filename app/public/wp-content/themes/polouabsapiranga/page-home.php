<?php
// Template Name:Home

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
                        <?php the_field('texto_intro'); ?>


                    </p>

                    <div class="pesquisa">
                        <span>Encontre um curso</span>
                        <!-- this div contais the search form -->
                        <div class="search_form">
                            <?php get_search_form(); ?>

                        </div>
                    </div>
                </div>
            </section>

            <!-- and now the cool swiper goes down here -->
            <div class="swiper mySwiper">
                <!-- <div class="swiper-pagination"></div> -->


                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="slide-item">
                            <!-- 1º colunm -->
                            <div class="slide-item-left">
                                <h4>
                                    <?php the_field('titulo_slide1'); ?>
                                </h4>
                                <h2><?php the_field('subtitulo_slide1') ?></h2>
                                <p>
                                    <?php the_field('descricao_slide_1') ?>
                                </p>
                                <a class="btn-hero" href="">Saiba mais</a>
                            </div>

                            <!-- 2º colunm -->
                            <div class="slide-item-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/hero1.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">

                        <div class="slide-item">
                            <div class="slide-item-left">
                                <h4>Título</h4>
                                <h2>Escolha um curso e venha estudar no Polo UAB</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident numquam eaque, nesciunt
                                    mollitia repellendus saepe error amet fuga molestiae magnam quod nihil enim atque,
                                    doloremque facere maxime dolorem aut cumque?
                                </p>
                                <a class="btn-hero" href="">Saiba mais</a>
                            </div>

                            <!-- 2º colunm -->
                            <div class="slide-item-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/hero1.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="wrapper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>



            </div>
            <!-- this section contains the universety partner of polo UAB Sapiranga -->

            <section class="partners container">
                <h4 class="title-section">
                    <?php the_field('titulo_instituicoes_parceiras'); ?>
                </h4>
                <ul>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/capes-uab.png" alt=""></a></li>
                    <li><a href="https://www.furg.br/en/" target="_blank" title="Universidade Federal do Rio Grande"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/furg.png" alt="Universidade Federal do Rio Grande"></a></li>
                    <li><a href="http://www.ifsul.edu.br/" target="_blank" title="IFSUL"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ifsul.png" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/pms.png" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/uab.png" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ufpel.png" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ufrgs.png" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ufsm.png" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/unipampa.png" alt=""></a></li>
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