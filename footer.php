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
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 row ml-0 mr-0">
			<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
					<h2>Организаторы:</h2>
				</div>
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
					<ul class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<li class="offset-1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">Правительство Удмуртской Республики</li>
						<li class="offset-1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">Министерство финансов Удмуртской Республики</li>
						<li class="offset-1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">АНО «Лаборатория организации научных исследований»</li>
						<li class="offset-1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">Центр финансового просвещения</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
					<h2>Контакты:</h2>
				</div>
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
					<ul class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<li class="offset-1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">Г. Ижевск, пл.им. 50 лет Октября, 7а</li>
						<li class="offset-1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0"><a href="tel:3412438686">Тел.: (3412) 43-86-86</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
					<h2>Контакты разработчиков проекта::</h2>
				</div>
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
					<ul class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<li class="offset-1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">АНО «Лаборатория организации научных исследований»</li>
						<li class="offset-1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">Г.Уфа, ул. Комарова 38, оф. 53</li>
						<li class="offset-1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0"><a href="tel:+73472945229">Тел.: (347) 294-52-29</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
	$(document).ready(function(){

        	var events = [
        		{
        			date: 'Апрель',
        			content: 'Проведение кейс-турниров и определение победителей'
        		},
        		{
        			date: 'Май',
        			content: 'Подготовка заявок'
        		},
        		{
        			date: 'Июнь',
        			content: 'Работа республиканской комиссии'
        		},
        		{
        			date: 'Август/Декабрь',
        			content: 'Реализация проектов'
        		}
        	];

            $('#roadmap').roadmap(events, {
                eventsPerSlide: 4,
                slide: 1,
                orientation: 'vertical',
            });

		});
</script>
</body>
</html>
