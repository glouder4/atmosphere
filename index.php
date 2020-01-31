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
		<main id="main" data-ride="carousel">
			<div id="element_1" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			</div>
			  <div id="directions" class="carousel slide" data-ride="carousel">
			  	<div class="carousel-inner col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  	 	<?php
  						if ( have_posts() ) {
  	
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
			  	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  	  <span class="sr-only">Previous</span>
			  	</a>
			  	<a class="carousel-control-next" href="#directions" role="button" data-slide="next">
			  	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  	  <span class="sr-only">Next</span>
			  	</a>
			  </div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
	<script type="text/javascript">
		$(document).ready(function(){
			let count = 0;
			let countOfRows = 0;
			let classList = '';
			let id = '';
			$('#directions>.carousel-inner')[0].innerHTML += '<div class="carousel-item active"><div class="row justify-content-center"></div></div>';
			let countOfArticles = $('#directions>.carousel-inner>article').length-1;
			for(var i =0;i <= countOfArticles;i++){
				if(count == 2){
					countOfRows++;
					classList = $('#directions>.carousel-inner')[0].children[i].className;
					id = $('#directions>.carousel-inner')[0].children[i].id;
					$('#directions>.carousel-inner')[0].innerHTML += '<div class="carousel-item"><div class="row justify-content-center"></div></div>';
					$('#directions>.carousel-inner>.carousel-item>.row')[countOfRows].innerHTML += '<article id="'+id+'" class="'+classList+'" >'+$('#directions>.carousel-inner')[0].children[i].innerHTML + '</article>';
					count = 0;
				}
				else{
					classList = $('#directions>.carousel-inner')[0].children[i].className;
					id = $('#directions>.carousel-inner')[0].children[i].id;
					$('#directions>.carousel-inner>.carousel-item>.row')[countOfRows].innerHTML += '<article id="'+id+'" class="'+classList+'" >'+$('#directions>.carousel-inner')[0].children[i].innerHTML + '</article>';
					count++;
				}
				classList = '';
				id = '';
			}
			for(var i =0;i <= countOfArticles;i++)$('#directions>.carousel-inner>article')[0].remove();
		})
	</script>

<?php
get_footer();
