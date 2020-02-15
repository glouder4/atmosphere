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
	  			elseif( is_page( 24 ) || is_page( 112 ) ):		  			
	  		 	query_posts('category_name=Реализованный проект&showposts=100');
	  		 	?>
					<div id="directions" class="slider responsive">
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
		</main><!-- #main -->
	</div><!-- #primary -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#directions').slick({
			  accessibility: false,
			  infinite: false,
			  speed: 300,
			  centerMode:true,
			  touchMove: true,
			  slidesToShow: 1,
			  slidesToScroll: 1
			});
		})
	</script>
	<?php 
	elseif( is_page( 70 ) ): 
		query_posts('category_name=Новости');
		?>
			<style>
				#news>div{
					margin-top: 35px;
					margin-bottom: 35px;
					background: white;
					display: inline-block;
					padding: 50px;
					box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
				}
			</style>
			<div id="news" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        	<h3 class="text-center">Новости</h3>
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
