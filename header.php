<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">
		  	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>	
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		   <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
				<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_class'     => 'main-menu',
								'items_wrap'     => '<ul id="%1$s" class="%2$s navbar-nav mr-auto">%3$s</ul>',
							)
						);
					?>
			<?php endif; ?>
		  </div>
	</nav>
	<script type="text/javascript">
		$(document).ready(function(){
			$('nav>.navbar-collapse>.main-menu-more').remove();
		})
	</script>

	<div id="content" class="site-content">
