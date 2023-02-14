<!DOCTYPE html>
<html>

<head>
  <title><?php bloginfo('name'); ?></title>


  <!--<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css" media="screen and (max-width:980px)"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/menu.css" media="screen and (max-width:694px)"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- wordpress header -->
  <?php wp_head(); ?>
</head>

<body>

  <header class="header">
    <!-- firt-row (logo e itens de acessibilidade e pesquisa) -->
    <div class="first-column container">

      <!-- polo logo -->
      <a href="/">
        <img class="logo-polo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/LogoPolo.svg" alt="">
      </a>

      <ul>
        <li>
          <a href="#">
            <img class="accessibility" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/accessibility.svg" alt="Acessibilidade">
            <span class="accessibility-title">Acessibilidade</span>
          </a>
        </li>

        <li>
          <!-- search form -->
          <div class="search_form">
            <?php get_search_form(); ?>
          </div>
        </li>

      </ul>
    </div>

    <!-- secound-row (menu) -->
    <div class="second-column">

      <!-- this container turns on below 877px  -->
      <!-- tThe classe below is used like that: 'container on right-side' so, add 'on' and 'right-side' class
    using js.  -->
      <div class="container">
        <div class="wrapper-hamburger">
          <span class="title-menu">Menu</span>
          <div class="menu-hamburguer">
            <span class="row"></span>
            <span class="row"></span>
            <span class="row"></span>
          </div>
        </div>
      </div>


      <!-- this container turns of below 877px  -->
      <!-- Lateral class, is used only for display the lateral menu on responsive perspective 
    The classe below is used like that: 'container off lateral', so, add 'off' and 'lateral' class
    using js.
    
    -->
      <div class="container">
        <nav class="menu ">
          <ul>
            <li><a href="/polouabsapiranga/home">home</a></li>
            <li><a href="/polouabsapiranga/sobre">sobre</a></li>
            <li><a href="/polouabsapiranga/graduacao">graduação</a></li>
            <li><a href="/polouabsapiranga/pos">pós graduação</a></li>
            <li><a href="/polouabsapiranga/pos">Cursos Previstos</a></li>
            <li><a href="/polouabsapiranga/editais">editais</a></li>
            <li><a href="/polouabsapiranga/noticias">noticias</a></li>
            <li><a href="/polouabsapiranga/contato">contato</a></li>
            <li><a href="/polouabsapiranga/biblioteca">biblioteca</a></li>
            <li><a href="/polouabsapiranga/faq">faq</a></li>
            <li><a href="/polouabsapiranga/faq">blog</a></li>
          </ul>
        </nav>
      </div>
    </div>

  </header>

  <!-- The responsive menu goes here -->

  <!-- sub-menu sobre -->
  <!-- <div class="sub-menu" style="display:none;"> -->

  <!-- submenu sobre -->
  <!-- <div class="container" id="sobre" style="display:none"> -->

  <!-- 1º column-->
  <!-- <ul>
        <li>
          <h4>Sobre</h4>
        </li>
        <li>
          <p>Oferecemos mais de XX cursos de gruduação em diversas áreas</p>
        </li>
      </ul> -->

  <!-- 2º column-->
  <!-- <ul>
        <li><a href="">Sobre o Polo Universitário</a></li>
        <li><a href="">Galeria de imagens</a></li>
      </ul> -->

  <!-- 3º column -->
  <!-- <ul>
        <li><a href="">Localização</a></li>
        <li><a href="">Contato</a></li>
        <li><a href="">FAQ</a></li>
      </ul>
    </div> -->

  <!--sub menu gradutate-->
  <!-- <div class="container" id="gradutate" style="display: none;"> -->

  <!-- 1º column-->
  <!-- <ul>
        <li>
          <h4>Graduação</h4>
        </li>
        <li>
          <p>Oferecemos mais de XX cursos de gruduação em diversas áreas</p>
        </li>
      </ul> -->

  <!-- 2º column-->
  <!-- <ul>
        <li><a href="">Sobre o Polo Universitário</a></li>
        <li><a href="">Galeria de imagens</a></li>
      </ul> -->

  <!-- 3º column -->
  <!-- <ul>
        <li><a href="">Localização</a></li>
        <li><a href="">Contato</a></li>
        <li><a href="">FAQ</a></li>
      </ul>
    </div> -->

  <!--sub menu pos-gradutate-->
  <!-- <div class="container" id="posgradutate" style="display: none;"> -->

  <!-- 1º column-->
  <!-- <ul>
        <li>
          <h4>Pós-Graduação</h4>
        </li>
        <li>
          <p>Oferecemos mais de XX cursos de gruduação em diversas áreas</p>
        </li>
      </ul> -->

  <!-- 2º column-->
  <!-- <ul>
        <li><a href="">Sobre o Polo Universitário</a></li>
        <li><a href="">Galeria de imagens</a></li>
      </ul> -->

  <!-- 3º column -->
  <!-- <ul>
        <li><a href="">Localização</a></li>
        <li><a href="">Contato</a></li>
        <li><a href="">FAQ</a></li>
      </ul>
    </div> -->

  <!--sub menu editais-->
  <!-- <div class="container" id="editais" style="display:none;"> -->

  <!-- 1º column-->
  <!-- <ul>
        <li>
          <h4>Editais</h4>
        </li>
        <li>
          <p>Oferecemos mais de XX cursos de gruduação em diversas áreas</p>
        </li>
      </ul> -->

  <!-- 2º column-->
  <!-- <ul>
        <li><a href="">Sobre o Polo Universitário</a></li>
        <li><a href="">Galeria de imagens</a></li>
      </ul> -->

  <!-- 3º column -->
  <!-- <ul>
        <li><a href="">Localização</a></li>
        <li><a href="">Contato</a></li>
        <li><a href="">FAQ</a></li>
      </ul>
    </div> -->

  <!--sub menu noticias-->
  <!-- <div class="container" id="noticias" style="display:none;"> -->

  <!-- 1º column-->
  <!-- <ul>
        <li>
          <h4>Noticias</h4>
        </li>
        <li>
          <p>Oferecemos mais de XX cursos de gruduação em diversas áreas</p>
        </li>
      </ul> -->

  <!-- 2º column-->
  <!-- <ul>
        <li><a href="">Sobre o Polo Universitário</a></li>
        <li><a href="">Galeria de imagens</a></li>
      </ul> -->

  <!-- 3º column -->
  <!-- <ul>
        <li><a href="">Localização</a></li>
        <li><a href="">Contato</a></li>
        <li><a href="">FAQ</a></li>
      </ul>
    </div> -->

  <!--sub menu contato-->
  <!-- <div class="container" id="contato" style="display:none;"> -->

  <!-- 1º column-->
  <!-- <ul>
        <li>
          <h4>Contato</h4>
        </li>
        <li>
          <p>Oferecemos mais de XX cursos de gruduação em diversas áreas</p>
        </li>
      </ul> -->

  <!-- 2º column-->
  <!-- <ul>
        <li><a href="">Sobre o Polo Universitário</a></li>
        <li><a href="">Galeria de imagens</a></li>
      </ul> -->

  <!-- 3º column -->
  <!-- <ul>
        <li><a href="">Localização</a></li>
        <li><a href="">Contato</a></li>
        <li><a href="">FAQ</a></li>
      </ul>
    </div> -->

  <!--sub menu faq-->
  <!-- <div class="container" id="faq"> -->

  <!-- 1º column-->
  <!-- <ul>
        <li>
          <h4>Perguntas Frequêntes</h4>
        </li>
        <li>
          <p>Oferecemos mais de XX cursos de gruduação em diversas áreas</p>
        </li>
      </ul> -->

  <!-- 2º column-->
  <!-- <ul>
        <li><a href="">Sobre o Polo Universitário</a></li>
        <li><a href="">Galeria de imagens</a></li>
      </ul> -->

  <!-- 3º column -->
  <!-- <ul>
        <li><a href="">Localização</a></li>
        <li><a href="">Contato</a></li>
        <li><a href="">FAQ</a></li>
      </ul>
    </div> -->


  <!-- </div> -->