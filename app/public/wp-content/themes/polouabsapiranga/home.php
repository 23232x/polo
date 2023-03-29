<?php
get_header();
?>

<!-- social medias top side bar -->
<div class="section container">
      <!-- breadcrumb -->
      <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

      <!-- import the social medias template -->
      <?php get_template_part('template-parts/social-medias'); ?>


      <!-- tittle -->
      <div class="title-section">
        <h4>Notícias Polo Uab Sapiranga</h4>
        <ul>
          <li>
            <span>Notícias polo UAB Sapiranga</span>
          </li>
        </ul>
      </div>
    </div>


<section class="main-page bg">
      <div class="contend-section">
        <ul class="ul-accordion">   
            <li>
                <button class="accordion">			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 				
				
				<h3><?php the_title();?></h3>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                </button>
                <div class="panel">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                </div>
            </li>
			<?php endwhile; ?>

	<div class="container">
		<?php next_posts_link( '← Posts Antigos' ); ?>
		<?php previous_posts_link( 'Posts Novos →' ); ?>
	</div>

	<?php else: endif; ?>

        </ul>

      </div>

    </section>


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




