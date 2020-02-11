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
          <p>Участие бесплатное</p>

        </div>
      </div>
			<div id="element_2" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 wow fadeInRight">
				<div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 p-0 mx-auto">
					<h2>Направления</h2>
					<h3>
						Здесь представлен слайдер из направлений (Записи -> Создать новую -> Название+Рубрика: "направления")
					</h3>
				</div>
			</div>
			<div id="directions" class="carousel slide" data-ride="carousel">
			  	<div class="container">
			  		<div class="carousel-inner col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  		 	<?php
								if ( have_posts() ) {
									query_posts('category_name=направления&showposts=100');
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
			
								}
							?>
			  		</div>
			  		<a class="carousel-control-prev" href="#directions" role="button" data-slide="prev">
			  		  <i class="fas fa-arrow-left" aria-hidden="true"></i>
			  		</a>
			  		<a class="carousel-control-next" href="#directions" role="button" data-slide="next">
			  		  <i class="fas fa-arrow-right" aria-hidden="true"></i>
			  		</a>
			  	</div>
			</div>
      <div id="howIcanParticipate" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 p-0 mx-auto">
          <h2 class="wow fadeInDown">Как участвовать в проекте?</h2>
          <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 row ml-0 mr-0 wow fadeInLeft">
            <div class="col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1">
              <h2>1)</h2>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-11 col-xl-11">
              <h4>  Придумайте проект для своего города, села. Это может быть общественное пространство, событие либо интернет-проект.</h4>
            </div>
          </div>
          <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 row mr-0 ml-auto text-right wow fadeInRight">
            <div class="col-2 col-sm-2 col-md-4 col-lg-5 col-xl-6">
              <h2>2)</h2>
            </div>
            <div class="col-10 col-sm-10 col-md-8 col-lg-7 col-xl-6">
              <h4>  Найдите единомышленников.</h4>
            </div>
          </div>
          <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 row ml-0 mr-0 wow fadeInLeft">
             <div class="col-2 col-sm-2 col-md-4 col-lg-1 col-xl-1">
              <h2>3)</h2>
            </div>
            <div class="col-10 col-sm-10 col-md-8 col-lg-11 col-xl-11">
              <h4>  Зарегистрируйтесь на сайте..</h4>
            </div>
          </div>
          <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 row mr-0 ml-auto text-right wow fadeInRight">
             <div class="col-2 col-sm-2 col-md-4 col-lg-5 col-xl-4">
              <h2>4)</h2>
            </div>
            <div class="col-10 col-sm-10 col-md-8 col-lg-7 col-xl-8">
              <h4>  Приходите с командой на семинар о проекте.</h4>
            </div>
          </div>
          <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 row ml-0 mr-0 wow fadeInLeft">
             <div class="col-2 col-sm-2 col-md-4 col-lg-1 col-xl-1">
              <h2>5)</h2>
            </div>
            <div class="col-10 col-sm-10 col-md-8 col-lg-11 col-xl-11">
              <h4>  Доработайте проект в кейс-турнире, под руководством опытных наставников</h4>
            </div>
          </div>
          <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 row mr-0 ml-auto text-right wow fadeInRight">
             <div class="col-2 col-sm-2 col-md-4 col-lg-5 col-xl-7">
              <h2>6)</h2>
            </div>
            <div class="col-10 col-sm-10 col-md-8 col-lg-7 col-xl-5">
              <h4>  Презентуйте свой проект.</h4>
            </div>
          </div>
          <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 mx-auto text-center wow fadeInUp">
             <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <h3>
                Победителями становятся те проекты, за которых проголосует большинство участников кейс-турнира.
              </h3>
              <h4>
                По результатам республиканского отбора проекты победителей будут профинансированы из бюджета Удмуртской Республики и реализованы в этом году.
              </h4>
            </div>
          </div>
        </div>
      </div>
      <div id="roadmap" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        
      </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	<script type="text/javascript">
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
	</script>

<?php
get_footer();
