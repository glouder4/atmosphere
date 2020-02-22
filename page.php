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

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
	  		 	if( is_page( 92 )||is_page( 216 ) ):
	  		 		?>
						<div id="directions" class="slider responsive">
					<?php
					 //query_posts('category_name=Вопросы&showposts=100');
					 echo 'FAQ';
					 ?>
					  		
				  	</div>
				<?php
	  			elseif( is_page( 24 ) || is_page( 7 ) ):		  			
	  		 	query_posts('category_name=Реализованный проект');
	  		 	?>	
					<div id="completed"> 
						<div class="col text-center">
							<select class="mx-auto" style="text-align-last: center"></select>
							<div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'></div>
						</div>
					</div>
					<div id="directions">
					<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content/content' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}

						endwhile; // End of the loop.
					?>
					  		
				  	</div>
				  	<script type="text/javascript">
				  		for(var i =0;i < (new Date().getFullYear() - 2017);i++){
							let date = new Date().getFullYear()-i;
							$('#completed>div>select')[0].innerHTML += "<option>"+date+"</option>";	
						}
						$('#completed>div>select').change(function() {
							for(let i =0 ;i< $('#directions>.col-12').length;i++)$('#directions>.col-12').hide();
								$('#year_'+this.value).show();
								$('#year_'+this.value).slick({
						            dots: true,
						            accessibility: false,
						            infinite: false,
						            speed: 300,
						            centerMode:true,
						            touchMove: true,
						            initialSlide:1,
						            slidesToShow: 3,
						            slidesToScroll: 2,
						            variableWidth: true,
						            responsive: [{
						              breakpoint: 400,
						              settings: {
						                slidesToShow: 1,
						                slidesToScroll: 1,
						              }
						            }]
						          });
						})
				  	</script>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php 
	elseif( is_page( 29 ) ): 
		query_posts('category_name=Новости');
		?>
			<style>
				#news>div:not(:first-child){
				    margin-top: 35px;
				    margin-bottom: 35px;
				    background: white;
				    display: inline-block;
				    padding-top: 25px;
				    padding-bottom: 10px;
				    max-width: 400px;
				    margin-left: 5px;
				    margin-right: 5px;
				}
			</style>
			<div id="news" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 row ml-0 mr-0">
        	<div class="col-12">
        		<h3 class="text-center">Новости</h3>
        	</div>
		<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content','newspage' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
		?>		
			</div>
		</main><!-- #main -->
	</div>
	<?php
	else:get_template_part( '404' );
	
	endif
	?>
<?php
get_footer();
