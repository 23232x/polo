<?php
// Template Name: graducao
?>




<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <!-- conteúdo da página vai aqui -->


        <div class="section container">

            <!-- all subpages contains this section socials icon on the top page -->
            <div class="social-medias-top-page">

                <!-- Social medias -->
                <ul>
                    <!-- facebook -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/face.svg" alt="Facebook Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- instagram -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/insta.svg" alt="Instagram Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- youtube -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/youtube.svg" alt="Youtube Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- whatsapp -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/whats.svg" alt="WhatsApp Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- email -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/email.svg" alt="E-mail Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- print -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/print.svg" alt=" Versão impressa da página">
                        </a>
                    </li>





                </ul>
            </div>

            <!-- tittle -->
            <div class="title-section">
                <h4><?php the_field('titulo_graduacao'); ?></h4>
                <ul>
                    <li>
                        <span><?php the_field('subtitulo_graduacao'); ?></span>

                    </li>
                </ul>
            </div>
        </div>


        <div class="bg-gray">

            <!--courses in progress  -->
            <div class="midium-container">

                <ul class="wraper-title">
                    <li>
                        <h4 class="title">Graduação em andamento</h4>
                    </li>
                    <li>
                        <span class="sub-title"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non euismod erat.</span>
                    </li>
                </ul>
                <ul class="box">
                    <li>
                        <h4 id="andamento" class="title" style="cursor: pointer;">Em andamento</h4>
                    </li>
                    <li>
                        <ul class="bg-white">
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- courses concluded -->
            <div class="midium-container">

                <ul class="wraper-title">
                    <li>
                        <h4 class="title">Graduação em andamento</h4>
                    </li>
                    <li>
                        <span class="sub-title"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non euismod erat.</span>
                    </li>
                </ul>
                <ul class="box">
                    <li>
                        <h4 id="andamento" class="title" style="cursor: pointer;">Concluído</h4>
                    </li>
                    <li>
                        <ul class="bg-white">
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- foreseen concluded -->
            <div class="midium-container">
                <ul class="wraper-title">
                    <li>
                        <h4 class="title">Cursos de graduação previstos</h4>
                    </li>
                    <li>
                        <span class="sub-title"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non euismod erat.</span>
                    </li>
                </ul>
                <ul class="box">
                    <li>
                        <h4 id="andamento" class="title" style="cursor: pointer;">Previstos</h4>
                    </li>
                    <li>
                        <ul class="bg-white">
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>














        <!-- <script>
            function alerta() {
                alert("ola");

            }
            var teste = document.getElementById('andamento');
            teste.addEventListener('click', alerta());
        </script> -->





<?php }
} ?>
<?php get_footer(); ?>

<!-- importa o footer -->