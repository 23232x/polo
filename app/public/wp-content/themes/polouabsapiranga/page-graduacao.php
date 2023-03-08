<?php
// Template Name: graducao
?>




<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <!-- conteúdo da página vai aqui -->


        <div class="section container">

            <!-- breadcrumb -->
            <div class="breadcrumb "><?php get_breadcrumb(); ?></div>

            <!-- import the social medias template -->
            <?php get_template_part('template-parts/social-medias'); ?>

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