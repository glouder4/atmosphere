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

			  <div id="directions" class="site-main carousel slide">
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
			let countOfArticles = $('#directions>.carousel-inner>article').length;
			$('#directions>.carousel-inner')[0].innerHTML += '<div class="row"></div>';
			for(var i =0;i < countOfArticles;i++){
				console.log($('#directions>.carousel-inner')[0].innerHTML);
				if(count == 2){
					countOfRows++;
					$('#directions>.carousel-inner')[0].innerHTML += '<div class="row"></div>';
					$('#directions>.carousel-inner>.row')[countOfRows].innerHTML += $('#directions>.carousel-inner>article')[0].innerHTML;
					count = 0;
				}
				else{
					$('#directions>.carousel-inner>.row')[countOfRows].innerHTML += $('#directions>.carousel-inner')[0]children[i].innerHTML;
					count++;
				}
			}
			for(var i =0;i < countOfArticles;i++){
				$('#directions>.carousel-inner>article')[0].remove();
			}
			$('#directions>.carousel-inner>.row>article')[0].classList +=" active";
		})
	</script>

<?php
get_footer();
