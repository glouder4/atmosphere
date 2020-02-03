<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
		<div id="register_form" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 wow fadeInUp">
			<h2>Зарегистрируйтесь на мероприятие</h2>
			<?php
				echo do_shortcode( '[contact-form-7 id="41" title="Регистрация"]' );
			?>
		</div>
		<img class="wow fadeInDown" src="/wp-content/themes/twentynineteen/images/footer.jpg" alt="">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<h4><a href="tel:+79625328444">+7-962-532-84-44</a></h4>
			<h4>team@atmosphere.ru</h4>
			<h4><a href="atmosphere.team">atmosphere.team</a></h4>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
