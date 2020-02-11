<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header('anypageheader');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">			
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );


			endwhile; // End of the loop.
			?>
<!-- Работает как надо -->
			<div id="directions" class="carousel slide" data-ride="carousel">
				<h3>Доступные кейсы по данному направлению</h3>
			  	<div class="container">
			  		<div class="carousel-inner col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			  		 	<?php 
			  		 	$pageTitle = get_the_title();
			  		 	$keysTitle = 'category_name='.get_the_title().':кейс&showposts=100';
			  									if ( have_posts() ) {
			  										query_posts($keysTitle);
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

		</main><!-- #main -->
	</div><!-- #primary -->
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
			if($('#directions>.container>.carousel-inner>.carousel-item>.row')[0].innerHTML == ""){
				$('#directions').hide();
			}
		})
	</script>
<?php
get_footer();
