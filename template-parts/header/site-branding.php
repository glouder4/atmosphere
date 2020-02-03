<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div class="site-branding navbar-brand col-8 col-sm-8 col-md-6 col-lg-6 col-xl-6 mr-0 p-0">
	<div class="row mr-0 ml-0">		
		<?php if ( has_custom_logo() ) : ?>
			<div class="site-logo col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3"><?php the_custom_logo(); ?></div>
		<?php endif; ?>
		<?php $blog_info = get_bloginfo( 'name' ); ?>
		<?php if ( ! empty( $blog_info ) ) : ?>
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title col-8 col-sm-9 col-md-9 col-lg-9 col-xl-9 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title col-8 col-sm-9 col-md-9 col-lg-9 col-xl-9 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
		<?php endif; ?>
	
		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu',
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
						'depth'          => 1,
					)
				);
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>
	</div>
</div><!-- .site-branding -->