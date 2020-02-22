<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: Главная
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main">
      <div id="element_first" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 wow fadeInLeft">
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 p-0 mx-auto">
          <h2>Удмуртская Республика</h2>
          <h3>
            «Атмосфера» - это проект инициативного бюджетирования для молодежи. Предлагайте свои инициативы, побеждайте в турнире и они могут быть реализованы!
          </h3>
          <h2>Участие бесплатное</h2>

        </div>
      </div>
      <div id="aboutProject" class="col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 mx-auto">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <h2 class="text-center">О проекте</h2>
          <h5><strong>О молодежном инициативном бюджетировании</strong></h5>
          <p>
            Инициативное бюджетирование – это когда жители участвуют в процессе распределения части денежных средств страны, региона, города. В проекте «Атмосфера» мы даем эту возможность вам – молодежи в возрасте от 14 до 25 лет включительно.
            Вы можете направить деньги на свои проекты. Они могут быть связаны с благоустройством общественных пространств, проведением культурно-массовых и образовательных мероприятий или созданием нужных для вас сайтов, мобильных приложений. 
          </p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <h5><strong>Обучение</strong></h5>
          <p>Обучение для участников кейс-турнира проходит в первый из трех дней самого турнира. Ты узнаешь, что такое:</p>
          <ul>
            <li>Инициативное бюджетирование и смежные практики </li>
            <li>Бюджет и как распределяются бюджетные деньги</li>
            <li>Проектное управление, функциональный и организационный планы проекта</li>
            <li>Тайм-менеджмент, креативное мышление, командобразование и другие soft-skills</li>
          </ul>
          <p>По итогам турнира ты получишь опыт разработки проекта от идеи до реализации.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-none">
          <h5><strong>Аналитика</strong></h5>
          <div class="projects">
          <?php
            if ( have_posts() ) {
              query_posts('category_name=Аналитика');
              // Load posts loop.
              while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content/content' ); 
              }
            }
          ?>
          </div>
        </div>
      </div>
      <script type="text/javascript" defer>
        $(document).ready(function(){
          $('#aboutProject>div>.projects').slick({
            dots: false,
            accessibility: false,
            infinite: false,
            speed: 300,
            centerMode:true,
            touchMove: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            responsive: [{
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
              }
            }, {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            }]
          });
        })
      </script>
			<div id="element_2" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 wow fadeInRight">
				<div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 p-0 mx-auto">
					<h2>Направления</h2>
				</div>
			</div>
			<div id="directions">
			  		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 row ml-0 mr-0">
			  		 	<?php
								if ( have_posts() ) {
									query_posts('category_name=направления');
									// Load posts loop.
									while ( have_posts() ) {
										the_post();
										get_template_part( 'template-parts/content/content' ); 
									}
			
			
								} else {
			
									// If no content, include the "No posts found" template.
									get_template_part( 'template-parts/content/content', 'none' );
			
								}
							?>
			  		</div>
            <script type="text/javascript">
              for(var i = 0;i< $('#directions>div>article').length;i++){
                if($('#directions>div>article>.entry-content>div')[i] == undefined){
                  $('#directions>div>article>.entry-content')[i].innerHTML += '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><input id="direction_'+i+'" type="submit" value="Подробнее"></div>';
                }
              }
            </script>
			</div>
      <div id="directions_info" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 row ml-0 mr-0">
            <?php
              if ( have_posts() ) {
                query_posts('category_name=направления');
                $num = 0;
                // Load posts loop.
                while ( have_posts() ) {
                  the_post();
                  set_query_var( 'direction_number', $num );
                  get_template_part( 'template-parts/content/content','directionpage'); 
                  $num = $num+1;
                }    
    
              } else {
    
                // If no content, include the "No posts found" template.
                get_template_part( 'template-parts/content/content', 'none' );
    
              }
            ?>
        </div>
        <div class="container">
          <h3 class="text-center">Банк кейсов</h3>
        </div>
        <div id="direction_cases"> 
          <div class="col text-center">
            <select class="mx-auto" style="text-align-last: center"></select>
            <div class='d-none'></div>
          </div>
          <div id="roadmapAreas" class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 mx-auto justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 name text-center p-0"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 data text-center p-0"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 doc text-center p-0"></div>
          </div>   
         <!-- <?php 
              /*  if ( have_posts() ) {
                query_posts('category_name=Общественные пространства:кейс');
                // Load posts loop.
                while ( have_posts() ) {
                  the_post();
                  get_template_part( 'template-parts/content/content' );
                }

                // Previous/next page navigation.
                twentynineteen_the_posts_navigation();

              } else { 

                // If no content, include the "No posts found" template.
                get_template_part( 'template-parts/content/content', 'none' );

              } */
              ?>  -->
        </div>
        <script type="text/javascript" defer>
          $(document).ready(function(){            
            $('#directions>div>article>.entry-content>div>input').click(function(){
              for(var i =0; i < $('#directions_info>.col-12>div').length;i++){
                $('#directions_info>.col-12>div')[i].style.display = "none";
              }
              if("#direction-"+this.id.split('_')[1] == "#direction-2"){
                $('#directions_info>.container').show();
                $('#direction_cases').show();
              }
              else{
                $('#directions_info>.container').hide();
                $('#direction_cases').hide();
              }
              $("#direction-"+this.id.split('_')[1]).show();
            })

          })
        </script>

      </div>
      <div id="howIcanParticipate" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0 row ml-0 mr-0">
          <h2 class="col-12 col-sm-12 col-md-12col-lg-12 col-xl-12 wow fadeInDown">Как участвовать в проекте?</h2>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row ml-0 mr-0 wow fadeInLeft">
            <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>1</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Придумайте проект для своего города, села</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row mr-0 ml-auto wow fadeInLeft">
            <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>2</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Найдите единомышленников</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row ml-0 mr-0 wow fadeInLeft">
             <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>3</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Зарегистрируйтесь на сайте</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row mr-0 ml-auto wow fadeInLeft">
             <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>4</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Приходите с командой на семинар о проекте</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row ml-0 mr-0 wow fadeInLeft">
             <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>5</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Доработайте проект в кейс-турнире</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row mr-0 ml-auto wow fadeInLeft">
            <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>6</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Презентуйте свой проект</h4>
            </div>
          </div>
        </div>
      </div>
      <div id="HowIcanWin" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 row ml-0 mr-0">
        <div class="d-none d-md-block col-md-2 col-lg-3 col-xl-3 wow fadeInLeft">
          <img style="float:right;height:175px" src="/wp-content/themes/twentynineteen/images/arrowLeft.png" alt="">
        </div>
        <div class="col-12 col-sm-9 col-md-8 col-lg-6 col-xl-6 text-center wow fadeInUp">
           <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mx-auto">
            <h4>
              Победителями становятся те проекты, за которых проголосует большинство участников кейс-турнира.<br><br>
              По результатам республиканского отбора проекты победителей будут профинансированы из бюджета Удмуртской Республики и реализованы в этом году.
            </h4>
          </div>
        </div>
        <div class="d-none d-md-block col-md-2 col-lg-3 col-xl-3 wow fadeInRight">
          <img style="float:left;height:175px" src="/wp-content/themes/twentynineteen/images/arrowRight.png" alt="">
        </div>
      </div>
      <div id="ProjectCamp" class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 mx-auto">
        <h5><strong>Проектный лагерь</strong></h5>
        <p>Проектный лагерь (Project Camp) – итоговое мероприятие проекта «Атмосфера». Это 5-дневный заезд в один из лучших лагерей Удмуртской Республики, на который приедут более 200 участников – победителей кейс-турниров со всей республики. Дата, место проведения и программа лагеря будет опубликована позже. Одно можем сказать заранее – будет весело!</p>
      </div>
      <div id="roadmap" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0 m-0">
        <h3 class="text-center">Этапы конкурса</h3>
      </div>
      <div id="news" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 row ml-0 mr-0">
        <div class="col-12">
          <h3 class="text-center">Новости</h3>
        </div>
        <?php
            if ( have_posts() ) {
              query_posts('category_name=Новости&showposts=3');
              // Load posts loop.
              while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content/content','news' );
              }
            }
        ?>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
          <a href="http://metamem680.myjino.ru/?page_id=29"><input type="button" value="Еще новости"></a>
        </div>
      </div>
      <div id="WatsNeed" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0 row ml-0 mr-0">
          <h2 class="col-12 col-sm-12 col-md-12col-lg-12 col-xl-12 wow fadeInDown">Условия участия</h2>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-0 row ml-0 mr-0 wow fadeInLeft">
            <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>1</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Тебе от 14 до 25 лет</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row mr-0 ml-auto wow fadeInLeft">
            <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>2</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Каждый участник регистрируется отдельно, команды будут сформированы исходя из твоих интересов и предпочтений в первый день кейс-турнира</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row ml-0 mr-0 wow fadeInLeft">
             <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>3</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Правильно укажи свой номер телефона и e-mail для связи. Если организаторы не смогут с тобой связаться, твое участие не будет подтверждено!</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row mr-0 ml-auto wow fadeInLeft">
             <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>4</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Помни, что кейс-турнир длится 3 дня. Заранее освободи свое расписание на это время, договорись о пропуске работы или учебы</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row ml-0 mr-0 wow fadeInLeft">
             <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>5</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Участие бесплатное. Но питание во время мероприятия и трансфер до места проведения кейс-турнира участники оплачивают самостоятельно</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row mr-0 ml-auto wow fadeInLeft">
            <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>6</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  В кейс-турнире может принять участие ограниченное количество человек. В список участников попадут самые быстрые. Если ты не попал в список участников, не переживай. Если освободятся места, мы обязательно с тобой свяжемся!</h4>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row mx-auto wow fadeInDown">
            <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 mx-auto">
              <h2>7</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
              <h4>  Тольки сами участники решают, какие проекты получат субсидию на реализацию. Но помни, что она ограничена</h4>
            </div>
          </div>
        </div>
      </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<!--	<script type="text/javascript">
		$(document).ready(function(){
			let count = 0;
			let countOfRows = 0;
			let classList = '';
			let id = '';
			$('#directions>.container>.carousel-inner')[0].innerHTML += '<div class="carousel-item active"><div class="row justify-content-center"></div></div>';
			let countOfArticles = $('#directions>.container>.carousel-inner>article').length-1;
			for(var i =0;i <= countOfArticles;i++){
				if(count == 2){
					countOfRows++;
					classList = $('#directions>.container>.carousel-inner')[0].children[i].className;
					id = $('#directions>.container>.carousel-inner')[0].children[i].id;
					$('#directions>.container>.carousel-inner')[0].innerHTML += '<div class="carousel-item"><div class="row justify-content-center"></div></div>';
					$('#directions>.container>.carousel-inner>.carousel-item>.row')[countOfRows].innerHTML += '<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 justify-content-center"><img src="/wp-content/themes/twentynineteen/images/keys.jpg"><article id="'+id+'" class="'+classList+'" >'+$('#directions>.container>.carousel-inner')[0].children[i].innerHTML + '</article></div>';
					count = 1;
				}
				else{
					classList = $('#directions>.container>.carousel-inner')[0].children[i].className;
					id = $('#directions>.container>.carousel-inner')[0].children[i].id;
					$('#directions>.container>.carousel-inner>.carousel-item>.row')[countOfRows].innerHTML += '<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 justify-content-center"><img src="/wp-content/themes/twentynineteen/images/keys.jpg"><article id="'+id+'" class="'+classList+'" >'+$('#directions>.container>.carousel-inner')[0].children[i].innerHTML + '</article></div>';
					count++;
				}
				classList = '';
				id = '';
			}
			for(var i =0;i <= countOfArticles;i++)$('#directions>.container>.carousel-inner>article')[0].remove();
		})
	</script> -->

<?php
get_footer();
