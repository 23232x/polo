<?php
// Template Name:Contato
?>

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <!-- the contend must be here -->
        <div class="section container">
            <!-- breadcrumb -->
            <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

            <!-- import the social medias template -->
            <?php get_template_part('template-parts/social-medias'); ?>

            <!-- tittle -->
            <div class="title-section">
                <h4> <?php the_cmb2field('title_contact_page'); ?></h4>
                <ul>
                    <li>
                        <span>
                            <?php the_cmb2field('subtitle_contact_page')?>
                            <a href="/polouabsapiranga/faq" target="_blank" rel="noopener noreferrer">FAQ</a>.
                        </span>
                    </li>
                </ul>
            </div>
        </div>


        
        <!-- Page contend -->
        <section class="main-page bg-contato">

            <div class="wrapper-address">

                <div class="polo-address">

                    <!-- Street Name -->
                    <div class="item-address">
                        <span class="address-title">Endereço</span>
                        <span class="address-description">
                        <?php the_cmb2field('rua')?>,    
                        <?php the_cmb2field('numero')?> -
                         <?php the_cmb2field('bairro')?> 
                        <?php the_cmb2field('cidade')?> - 
                        <?php the_cmb2field('uf')?>
                        CEP: <?php the_cmb2field('cep')?>                                               
                        </span>
                    </div>

                    <!-- opening hours -->
                    <div class="item-address">
                        <span class="address-title">Horários de atendimento</span>
                        <span class="address-description">
                            
                        <!-- iterator loop for opening hours -->
                        <?php $opening = get_cmb2field('opening');
                          if(isset($opening)){ foreach($opening as $open){?>
                            <?php echo $open['turno'];?>:</br>
                            <?php echo $open['initial_hour'];?>h as <?php echo $open['final_hour'];?>h ( <?php echo $open['service_days'];?>)</span>
                        <br>
                        <?php
                        } }
                        ?>

                    </div>

                    <!-- the team -->
                    <div class="item-address">
                        <span class="address-title">Nossa equipe</span>
                        <ul>
                    
                       <?php $equipes = get_cmb2field('equipes');
                       if(isset($equipes)){ foreach($equipes as $equipe){?>
                        <li>
                           
                        <?php echo $ $equipe['people_name']?>
                        <?php echo $ $equipe['function_name']?>
                        <?php echo $ $equipe['people_email']?>
                        
                        :</br>
                                <span class="address-description">
                                xxx- xxx
                                <a href="mailto:elisabete.pead@gmail.com">email </a></span>
                            </li>

                       <?php
                       }}?>

                                            
                        
                    </ul>
                    </div>

                    
                    <div class="item-address">                     
                    
                    <!-- telefone -->
                    <span class="address-title">Telefone</span>
                        <span class="address-description">
                        (<?php the_cmb2field('codigo_area'); ?>) <?php the_cmb2field('telefone'); ?></br> Ramal: 
                        <?php the_cmb2field('ramal'); ?></br></span>
                    </div>

                    <!--email-->
                    <div class="item-address">
                        <span class="address-title">E-mail</span>
                        <span class="address-description"><a href="mailto:<?php the_cmb2field('email'); ?>"><?php the_cmb2field('email'); ?></a></span>
                    </div>
                </div>

                <div class="polo-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3467.7806417270012!2d-51.006344784894466!3d-29.63911368203156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95193f29215994c3%3A0x8f77ee6b5845ad9!2sPolo%20Universit%C3%A1rio%20de%20Sapiranga!5e0!3m2!1spt-BR!2sbr!4v1671730623189!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>


        <div class="related-itens container">
            <h4>Itens relacionados</h4>
        </div>





<?php
    }
}
?>
<?php get_footer(); ?>