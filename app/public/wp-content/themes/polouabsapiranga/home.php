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
      <div class="contend-section section-noticias">
     
      <ul class="ul-accordion noticias">   
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
            <li class="noticia-item">
                <button class="accordion btn-accordion">				
                
                <h3 class="title-noticia"><?php the_title();?></h3>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus-thin1.svg">
                </button>
                
                <div class="panel noticias">

              
					          <h2><?php the_title();?></h2>
                    <p><?php the_content();?></p>
                   
                   <div class="date-posts">
                    <p class="item-date">
                      <span> Data da publicação</span> <time datatime="<?php the_time('Y-m-d'); ?>"><?php the_time('d/m/Y');?></time>
                    </p>
                   
                    <p class="item-date update"><span>Atualizado em </span> <time datetime="<?php the_modified_time('Y-m-d'); ?>"><?php the_modified_time('d/m/Y'); ?></time>
                  </p>
                  
                </div>
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




