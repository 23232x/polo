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
        <h4><?php the_cmb2field('title_page_faq'); ?></h4>
        <ul>
          <li>
            <span><?php the_cmb2field('subtitle_page_faq'); ?></span>
          </li>
        </ul>
      </div>
    </div>

    <!-- page contend -->
    <section class="main-page bg">
      <div class="contend-section">



        <ul class="ul-accordion">
          <?php $faqs = get_cmb2field('faqs');

          if (isset($faqs)) {

            foreach ($faqs as $faq) { ?>

              <li>
                <button class="accordion">
                  <h3><?php echo $faq['faq_question'] ?></h3>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                </button>
                <div class="panel">
                  <p><?php echo $faq['faq_answer'] ?></p>
                </div>
              </li>
          <?php }
          }
          ?>

        </ul>

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