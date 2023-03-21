<?php
//Template Name: FAQ
?>



<?php get_header(); ?>
<!-- wordpress loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <!-- social medias top side bar -->
        <div class="section container">
            <!-- breadcrumb -->
            <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

            <!-- import the social medias template -->
            <?php get_template_part('template-parts/social-medias'); ?>


            <!-- tittle -->
            <div class="title-section">
                <h4><?php the_cmb2field('title_page_faq');?></h4>
                <ul>
                    <li>
                        <span><?php the_cmb2field('subtitle_page_faq');?></span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- page contend -->
        <section class="main-page bg">
            <div class="contend-section">

               
            <?php $faqs = get_cmb2field('faqs');
            if(isset($faqs)){ foreach($faqs as $faq){?>
               
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta1">
                        <h4><?php echo $faq['faq_question'];?></h4>
                        <img class=" cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>

                    <p class="faq-answer" id="resposta1" style="display: none;">
                       <?php echo $faq['faq_answer'];?>
                    </p>
                </div>
                
                <?php
                     }}
               ?>  
            </div>
        </section>


<?php endwhile;
else : endif ?>

<?php get_footer(); ?>

<script>
    //####### FAQ1 ##########
    var btp1 = document.getElementById("pergunta1");

    btp1.addEventListener("click", function() {

        var btr1 = document.getElementById("resposta1");

        if (btr1.classList.contains("swanw") && btp1.classList.contains("on")) {
            btr1.classList.remove("swanw");
            btp1.classList.remove("on");
        } else {
            btr1.classList.add("swanw");
            btp1.classList.add("on");
        }
    });

    //####### FAQ2 ##########

    var btp2 = document.getElementById("pergunta2");

    btp2.addEventListener("click", function() {

        var btr2 = document.getElementById("resposta2");

        if (btr2.classList.contains("swanw") && btp2.classList.contains("on")) {
            btr2.classList.remove("swanw");
            btp2.classList.remove("on");
        } else {
            btr2.classList.add("swanw");
            btp2.classList.add("on");
        }
    });

    //####### FAQ3 ##########
    var btp3 = document.getElementById("pergunta3");

    btp3.addEventListener("click", function() {

        var btr3 = document.getElementById("resposta3");

        if (btr3.classList.contains("swanw") && btp3.classList.contains("on")) {
            btr3.classList.remove("swanw");
            btp3.classList.remove("on");
        } else {
            btr3.classList.add("swanw");
            btp3.classList.add("on");
        }
    });

    //####### FAQ4 ##########
    var btp4 = document.getElementById("pergunta4");

    btp4.addEventListener("click", function() {

        var btr4 = document.getElementById("resposta4");

        if (btr4.classList.contains("swanw") && btp4.classList.contains("on")) {
            btr4.classList.remove("swanw");
            btp4.classList.remove("on");
        } else {
            btr4.classList.add("swanw");
            btp4.classList.add("on");
        }
    });

    //####### FAQ5 ##########
    var btp5 = document.getElementById("pergunta5");

    btp5.addEventListener("click", function() {

        var btr5 = document.getElementById("resposta5");

        if (btr5.classList.contains("swanw") && btp5.classList.contains("on")) {
            btr5.classList.remove("swanw");
            btp5.classList.remove("on");
        } else {
            btr5.classList.add("swanw");
            btp5.classList.add("on");
        }
    });

    //####### FAQ6 ##########
    var btp6 = document.getElementById("pergunta6");
    btp6.addEventListener("click", function() {

        var btr6 = document.getElementById("resposta6");

        if (btr6.classList.contains("swanw") && btp6.classList.contains("on")) {
            btr6.classList.remove("swanw");
            btp6.classList.remove("on");
        } else {
            btr6.classList.add("swanw");
            btp6.classList.add("on");
        }
    });

    //####### FAQ7 ##########
    var btp7 = document.getElementById("pergunta7");
    btp7.addEventListener("click", function() {

        var btr7 = document.getElementById("resposta7");

        if (btr7.classList.contains("swanw") && btp7.classList.contains("on")) {
            btr7.classList.remove("swanw");
            btp7.classList.remove("on");
        } else {
            btr7.classList.add("swanw");
            btp7.classList.add("on");
        }
    });

    //####### FAQ8 ##########
    var btp8 = document.getElementById("pergunta8");
    btp8.addEventListener("click", function() {

        var btr8 = document.getElementById("resposta8");

        if (btr8.classList.contains("swanw") && btp8.classList.contains("on")) {
            btr8.classList.remove("swanw");
            btp8.classList.remove("on");
        } else {
            btr8.classList.add("swanw");
            btp8.classList.add("on");
        }
    });

    //####### FAQ9 ##########
    var btp9 = document.getElementById("pergunta9");
    btp9.addEventListener("click", function() {

        var btr9 = document.getElementById("resposta9");

        if (btr9.classList.contains("swanw") && btp9.classList.contains("on")) {
            btr9.classList.remove("swanw");
            btp9.classList.remove("on");
        } else {
            btr9.classList.add("swanw");
            btp9.classList.add("on");
        }
    });

    //####### FAQ10 ##########
    var btp10 = document.getElementById("pergunta10");
    btp10.addEventListener("click", function() {

        var btr10 = document.getElementById("resposta10");

        if (btr10.classList.contains("swanw") && btp10.classList.contains("on")) {
            btr10.classList.remove("swanw");
            btp10.classList.remove("on");
        } else {
            btr10.classList.add("swanw");
            btp10.classList.add("on");
        }
    });

    //####### FAQ11 ##########
    var btp11 = document.getElementById("pergunta11");
    btp11.addEventListener("click", function() {

        var btr11 = document.getElementById("resposta11");

        if (btr11.classList.contains("swanw") && btp11.classList.contains("on")) {
            btr11.classList.remove("swanw");
            btp11.classList.remove("on");
        } else {
            btr11.classList.add("swanw");
            btp11.classList.add("on");
        }
    });

    //####### FAQ12 ##########
    var btp12 = document.getElementById("pergunta12");
    btp12.addEventListener("click", function() {

        var btr12 = document.getElementById("resposta12");

        if (btr12.classList.contains("swanw") && btp12.classList.contains("on")) {
            btr12.classList.remove("swanw");
            btp12.classList.remove("on");
        } else {
            btr12.classList.add("swanw");
            btp12.classList.add("on");
        }
    });

    //####### FAQ13 ##########
    var btp13 = document.getElementById("pergunta13");
    btp13.addEventListener("click", function() {

        var btr13 = document.getElementById("resposta13");

        if (btr13.classList.contains("swanw") && btp13.classList.contains("on")) {
            btr13.classList.remove("swanw");
            btp13.classList.remove("on");
        } else {
            btr13.classList.add("swanw");
            btp13.classList.add("on");
        }
    });
</script>