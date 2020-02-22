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

?>

<?php

$articleClasses = array(
'col-12',
'col-sm-12',
'col-md-12',
'col-lg-12',
'col-xl-12',
'align-self-center'
);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($articleClasses); ?>>
	<header class="entry-header front_side">
		<?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
		}
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( sprintf( '<h3 class="entry-title">', esc_url( get_permalink() ) ), '</h3>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<?php twentynineteen_post_thumbnail(); ?>

	<div class="entry-content back_side">
		<?php
		the_excerpt(
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
</article><!-- #post-<?php the_ID(); ?> -->
