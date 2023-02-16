<?php
//Template Name: FAQ
?>



<?php get_header(); ?>

<!-- wordpress loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



        <!-- social medias top side bar -->
        <div class="section container">
            <!-- all subpages contains this section socials icon on the top page -->

            <!-- import the social medias template -->
            <?php
            get_template_part('template-parts/social-medias');
            ?>


            <!-- tittle -->
            <div class="title-section">
                <h4>FAQ - Perguntas Frequêntes.</h4>
                <ul>
                    <li>
                        <span>
                            Selecionamos uma lista de perguntas frequêntes para te ajudar
                            <a href="mailto:adicicionaremail?subject=Pergunta" class="email-link">polouab@polouab.com.br</a>
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
                    <div class="faq-title on">
                        <h4 id="faq01">O que é a UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        É um programa federal que visa ampliar e interiorizar a oferta de cursos e programas de educação superior, por meio da educação a distância.
                    </p>
                </div>

                <!--*********** 2° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq02">O que é um Polo UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        É um local para o desenvolvimento de atividades pedagógicas presenciais, em que os alunos entram em contato com tutores e professores.
                    </p>
                </div>

                <!--*********** 3° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq03">Quem é o mantenedor do Polo UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        A Prefeitura Municipal.
                    </p>
                </div>

                <!--*********** 4° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq04">Qual a infraestrutura do Polo?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        O Polo oferece, sala de coordenação, secretaria, sala de tutoria, salas de aula, laboratórios de informática e biblioteca.
                    </p>
                </div>

                <!--*********** 5° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq05">Qual a prioridade dos cursos nos Polos UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        A prioridade é a formação de professores em efetivo exercício na educação básica pública, mas que ainda não possuem graduação, além de proporcionar formação continuada àqueles já graduados.
                    </p>
                </div>

                <!--*********** 6° FAQ **************-->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq06">Quais os objetivos do programa UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        Os principais objetivos deste programa são:
                    </p>
                    <ul class="list-faq">
                        <li>
                            <p>oportunizar a oferta de cursos para dirigentes, gestores e outros profissionais da educação básica da rede pública;</p>
                        </li>
                        <li>
                            <p>reduzir as desigualdades na oferta de ensino superior e desenvolver um amplo sistema nacional de educação superior a distância.</p>
                        </li>
                        <li>
                            <p>formar professores e outros profissionais de educação nas áreas da diversidade;</p>
                        </li>
                        <li>
                            <p>disseminação e desenvolvimento de metodologias educacionais de inserção dos temas de áreas como educação de jovens e adultos, educação ambiental, educação patrimonial, educação para os direitos humanos, educação das relações étnico-raciais, de gênero e orientação sexual e temas da atualidade no cotidiano das práticas das redes de ensino pública e privada de educação básica no Brasil.</p>
                        </li>
                    </ul>
                </div>

                <!--*********** 7° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq07">Os cursos são gratuitos?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        Os cursos de graduação sim , o candidato paga somente a inscrição para o vestibular. Já, os cursos de pós graduação, fica a critério da Universidade a cobrança de mensalidade ou não mas, até o momento, todos os cursos oferecidos são gratuitos.
                    </p>
                </div>

                <!--*********** 8° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq08">Qual o tempo de duração?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        O mesmo tempo da duração dos cursos de graduação, são de 8 a 10 semestres dependendo do curso, já os de pós, são de 18 a 24 meses.
                    </p>
                </div>

                <!--*********** 9° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq09">Qual a forma de ingresso?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        A universidade que oferece o curso pode optar por vestibular ou pela nota do ENEM.
                    </p>
                </div>

                <!--*********** 10° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq10">Qual período do ano os editais são publicados?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        Não existe uma data específica, pode ser no início, no meio ou no final do ano. Os cursos têm início no primeiro ou segundo semestre, assim, o edital é divulgado em torno de 3 a 4 meses antes para que haja tempo de divulgação e realização do processo seletivo e para as matrículas.
                    </p>
                </div>

                <!--*********** 11° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq11">Os cursos são oferecidos por universidades públicas e privadas?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        Pelo sistema UAB, somente por universidades públicas.
                    </p>
                </div>

                <!--*********** 12° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq12">Posso estar matriculado em dois cursos simultaneamente?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        Se forem duas especializações ou uma graduação e uma especialização sim, mas graduação não pode. Precisa concluir uma para se matricular em outra.
                    </p>
                </div>

                <!--*********** 13° FAQ ************** -->
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title on">
                        <h4 id="faq13">Como é estudar na UAB?</h4>
                        <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: block;">
                        Estudar na Universidade Aberta (UAB) não é fácil: exige muita motivação, organização e disciplina. Mas tem inúmeras vantagens: sobretudo a possibilidade de gerir o tempo, conciliar os estudos com as obrigações familiares e profissionais.
                    </p>
                </div>

            </div>







        </section>




<?php endwhile;
else : endif ?>

<?php get_footer(); ?>