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
        <h4><?php the_cmb2field('contact_title') ?></h4>
        <ul>
            <li>
                <span>
                    <?php the_cmb2field('contact_subtitle') ?>
                    <!-- <a href="/polouabsapiranga/faq" target="_blank" rel="noopener noreferrer">FAQ</a>. -->
                </span>
            </li>
        </ul>
    </div>

    <section class="main-page editais">

        <!-- a iteração inicia aqui --> 
        <div class="edital-item">
            <!-- *************** -->
            <ul class="ul-accordion">
                <?php $editais = get_cmb2field('editais');
                if (isset($editais)) {
                foreach ($editais as $edital) { ?>
                <li>
                    <button class="accordion">
                        <h3><?php echo $edital['edital_title']; ?></h3>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                    </button>
                    <div class="panel edital-contente">
                        <p class="edital-title"><?php echo $edital['edital_title']; ?></p>
                        <p class="edital-desc">
                           <?php echo $edital['edital_description']; ?>
                        </p>                        
                        
                       <span class="inscri-data">Periodo do inscrição: </span> <span><?php echo $edital['edital_date_start']; ?></span> até <span><?php echo $edital['edital_date_end']; ?>.</span>
                       <span class="mais-info">Mais informações:<a href="<?php echo $edital['more_info']; ?>">acesse aqui</a>.</span>
                        
                    </div>
                </li>
                <?php 
                }
                }
                 ?>

            </ul>
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