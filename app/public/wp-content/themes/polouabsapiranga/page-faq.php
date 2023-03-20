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
                <h4> 
                    
                </h4>
                <ul>
                    
                        <span>
                        <?php the_cmb2field('subtitle_page_faq');?>    
                      
                            <a href="mailto:<?php the_cmb2field('email_subtitle_page_faq');?>?subject=Pergunta" class="email-link"><?php the_cmb2field('email_subtitle_page_faq')?></a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- page contend -->
        <section class="main-page bg">
            <div class="contend-section">

                <!--*********** 1° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta1">
                        <h4>O que é a UAB?</h4>
                        <img class=" cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>

                    <p class="faq-answer" id="resposta1" style="display: none;">
                        É um programa federal que visa ampliar e interiorizar a oferta de cursos e programas de educação superior, por meio da educação a distância.
                    </p>
                </div>

                <!--*********** 2° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta2">
                        <h4>O que é um Polo UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta2" style="display: none;">
                        É um local para o desenvolvimento de atividades pedagógicas presenciais, em que os alunos entram em contato com tutores e professores.
                    </p>
                </div>

                <!--*********** 3° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta3">
                        <h4>Quem é o mantenedor do Polo UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta3" style="display:none;">
                        A Prefeitura Municipal.
                    </p>
                </div>

                <!--*********** 4° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta4">
                        <h4>Qual a infraestrutura do Polo?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta4" style="display: none;">
                        O Polo oferece, sala de coordenação, secretaria, sala de tutoria, salas de aula, laboratórios de informática e biblioteca.
                    </p>
                </div>

                <!--*********** 5° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta5">
                        <h4>Qual a prioridade dos cursos nos Polos UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta5" style="display: none;">
                        A prioridade é a formação de professores em efetivo exercício na educação básica pública, mas que ainda não possuem graduação, além de proporcionar formação continuada àqueles já graduados.
                    </p>
                </div>

                <!--*********** 6° FAQ **************-->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta6">
                        <h4>Quais os objetivos do programa UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta6" style="display: none;">
                        Os principais objetivos deste programa são:

                        - oportunizar a oferta de cursos para dirigentes, gestores e outros profissionais da educação básica da rede pública;

                        - reduzir as desigualdades na oferta de ensino superior e desenvolver um amplo sistema nacional de educação superior a distância.< formar professores e outros profissionais de educação nas áreas da diversidade; -Disseminação e desenvolvimento de metodologias educacionais de inserção dos temas de áreas como educação de jovens e adultos, educação ambiental, educação patrimonial, educação para os direitos humanos, educação das relações étnico-raciais, de gênero e orientação sexual e temas da atualidade no cotidiano das práticas das redes de ensino pública e privada de educação básica no Brasil. </p>

                </div>

                <!--*********** 7° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta7">
                        <h4>Os cursos são gratuitos?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta7" style="display: none;">
                        Os cursos de graduação sim , o candidato paga somente a inscrição para o vestibular. Já, os cursos de pós graduação, fica a critério da Universidade a cobrança de mensalidade ou não mas, até o momento, todos os cursos oferecidos são gratuitos.
                    </p>
                </div>

                <!--*********** 8° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta8">
                        <h4>Qual o tempo de duração?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta8" style="display: none;">
                        O mesmo tempo da duração dos cursos de graduação, são de 8 a 10 semestres dependendo do curso, já os de pós, são de 18 a 24 meses.
                    </p>
                </div>

                <!--*********** 9° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta9">
                        <h4>Qual a forma de ingresso?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta9" style="display: none;">
                        A universidade que oferece o curso pode optar por vestibular ou pela nota do ENEM.
                    </p>
                </div>

                <!--*********** 10° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta10">
                        <h4>Qual período do ano os editais são publicados?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta10" style="display: none;">
                        Não existe uma data específica, pode ser no início, no meio ou no final do ano. Os cursos têm início no primeiro ou segundo semestre, assim, o edital é divulgado em torno de 3 a 4 meses antes para que haja tempo de divulgação e realização do processo seletivo e para as matrículas.
                    </p>
                </div>

                <!--*********** 11° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta11">
                        <h4>Os cursos são oferecidos por universidades públicas e privadas?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta11" style="display: none;">
                        Pelo sistema UAB, somente por universidades públicas.
                    </p>
                </div>

                <!--*********** 12° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta12">
                        <h4>Posso estar matriculado em dois cursos simultaneamente?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta12" style="display: none;">
                        Se forem duas especializações ou uma graduação e uma especialização sim, mas graduação não pode. Precisa concluir uma para se matricular em outra.
                    </p>
                </div>

                <!--*********** 13° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <button class="faq-title" id="pergunta13">
                        <h4>Como é estudar na UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </button>
                    <p class="faq-answer" id="resposta13" style="display: none;">
                        Estudar na Universidade Aberta (UAB) não é fácil: exige muita motivação, organização e disciplina. Mas tem inúmeras vantagens: sobretudo a possibilidade de gerir o tempo, conciliar os estudos com as obrigações familiares e profissionais.
                    </p>
                </div>
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