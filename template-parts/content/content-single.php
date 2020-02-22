<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
		$category = get_the_category();
		if($category[0]->cat_name == "Реализованный проект"):
$divClasses = array(
'col-12',
'col-sm-12',
'col-md-9',
'col-lg-9',
'col-xl-9'
);
?>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 row ml-0 mr-0">
	<div id="post-<?php the_ID(); ?>" <?php post_class($divClasses); ?>>
		<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
		<header class="entry-header">
			<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
		</header>
		<?php endif; ?>

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Post title. Only visible to screen readers. */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->


		<?php if ( ! is_singular( 'attachment' ) ) : ?>
			<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
		<?php endif; ?>

	</div><!-- #post-<?php the_ID(); ?> -->
	<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
		<?php 
			the_tags('Информация о проекте:<br>');
		?>
	</div>
	<script type="text/javascript">
		for(var i =0;i< $('#main>div>div>a').length;i++){
			let buffer = $('#main>div>div>a')[i].innerText;
			$('#main>div>div>a')[i].style.display = "none";
			$('#main>div>div')[1].innerHTML += "<div class='col-12'></div>";
			$('#main>div>div>.col-12')[i].innerText = buffer;
		}
		$('#main>div>div>a').length
	</script>
</div>

<?php
		else:
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->


	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php endif ?>

