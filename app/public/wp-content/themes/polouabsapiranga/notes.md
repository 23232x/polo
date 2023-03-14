# try to use this font for subtitle:

https://fonts.google.com/specimen/Source+Serif+Pro?query=Source+Serif+Pro

A função <?php get_search_form(); ?> busca o template de busca padrão que estará localizada
dentro do template: "searchform.php" , caso este template não existá, será utilizado um template padrão localizado em "wp-includes/general-template.php" .

https://full.services/como-personalizar-os-resultados-da-pagina-de-pesquisa-no-wordpress/?lang=pt-pt

\***\* Add releted itens \*\***
1 - https://www.hostinger.com.br/tutoriais/plugin-wordpress-posts-relacionados
2 -

What's the diference between searchpage.php, searchform.php and search.php?

see at: https://wordpress.stackexchange.com/questions/4192/search-in-wordpress-difference-of-searchpage-php-searchform-php-and-search-ph

using page.php
https://www.youtube.com/watch?v=zj93t2Mm0vA

- searchpage.php :
- searchform.php : its a default template search form, looks like:

- search.php : Is the main search template, its a template to display the result search page
- content-search.php :

- adding a sidebar.php and others: youtube.com/watch?v=zj93t2Mm0vA

Funções de internacionalização do wordpress: fonte(https://filipeseabra.me/blog/funcoes-internacionalizacao-wordpress/#_4)

- A internacionalização é conhecida também como i18n, onde, em inglês, internacionalization tem 18 letras entras o i e o n.

         <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x('pesquiar', 'submit button'); ?>" />

* A página index.php: é um arquivo de fallback, uma página default que seŕa utilizado para exibir (posts, categorias, pesquisas, página, e assim por diante.) caso não exista a página específica criada.

* simgle.php:
  Por exemplo: O arquivo single.php é responsável por exibir o artigo na íntegra. Quando você acessa qualquer artigo do blog, o WordPress vai procurar primeiro pelo arquivo “single.php” (que deve conter um loop, como já foi descrito). Caso o arquivo single.php não exista, o sistema se encarrega de incluir o arquivo index.php (que também deve contar com um loop). Com isso, caso você não precise personalizar cada área do seu blog, não precisa criar todos os arquivos que existem.

  https://www.todoespacoonline.com/w/2014/09/arquivos-de-um-tema-wordpress/#:~:text=Por%20padr%C3%A3o%2C%20os%20arquivos%20de,dentro%20de%20sua%20pr%C3%B3pria%20pasta.&text=Perceba%20que%20tenho%20alguns%20temas,gratuitos%20s%C3%A3o%20disponibilizados%20pelo%20CMS.

  ler
