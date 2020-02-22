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
				echo do_shortcode( '[contact-form-7 id="7" title="Регистрация"]' );
			?>
		</div>
		<div id="end" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 row">
			<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 wow fadeInRight">
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
					<h2>Организаторы:</h2>
				</div>
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12 wow fadeInRight">
					<ul class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
						<li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">Правительство Удмуртской Республики</li>
						<li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">Министерство финансов Удмуртской Республики</li>
						<li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">АНО «Лаборатория организации научных исследований»</li>
						<li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">Центр финансового просвещения</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl3 wow fadeInRight">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<h2>Контакты разработчиков проекта:</h2>
				</div>
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
					<ul class="col-12 col-sm-12 col-md-12 col-md-12 col-lg-12 col-xl-12 p-0">
						<li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">АНО «Лаборатория организации научных исследований»</li>
						<li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">info@atmosphere.team</li>
						<li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0"><a href="tel:+73972945229">Тел.: (397) 294-52-29</a></li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mx-auto">
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
					<h2>Контакты:</h2>
				</div>
				<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
					<ul class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
						<li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">АУДО УР «Центр финансового просвещения»<br> Г. Ижевск, пл.им. 50 лет Октября, 7а</li>
						<li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0"><a href="tel:3412438686">Тел.: (3412) 43-86-86</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" defer>
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
        for(var i =2; i < $('#register_form>div>form>div').length;i++){
				$('#register_form>div>form>div')[i].style.display = "none";
			}
			$('#register_form>div>form>p>span>select')[1].style.display = "none";
			$('#register_form>div>form>p>span>textarea')[0].style.display = "none";
			$('#register_form>div>form>p>span>textarea')[1].style.display = "none";
			$('#register_form>div>form>p>span>span>span>input').click(function(){
				if((this.value == "Да")&&($('#register_form>div>form>p>span>textarea')[0].style.display == "none")){
					for(var i =2; i < $('#register_form>div>form>div').length-1;i++){
						$('#register_form>div>form>div')[i].style.display = "block";
						$('#register_form>div>form>p>span>select')[1].style.display = "inline-block;";
						$('#register_form>div>form>p>span>textarea')[0].style.display = "block";
						$('#register_form>div>form>p>span>textarea')[1].style.display = "block";
					}
				}
				else{
					for(var i =2; i < $('#register_form>div>form>div').length-1;i++){
						$('#register_form>div>form>div')[i].style.display = "none";
						$('#register_form>div>form>p>span>select')[1].style.display = "none";
						$('#register_form>div>form>p>span>textarea')[0].style.display = "none";
						$('#register_form>div>form>p>span>textarea')[1].style.display = "none";
					}
				}
			})
        if(window.location.search == ''){
        	if(window.location.hash == "#directions_info"){
        		$('#directions_info>.container').show();
                $('#direction_cases').show();
        	}
            if($('#directions>div>div')[0] != undefined){
	            if($('#directions>div>div')[0].innerHTML == ""){
	            	$('#main>.container')[1].style.display = 'none';
	            	$('#directions').hide();
	            }
	        }
	        for(var i=0;i< $('#register_form>div>form>p>span>select>option').length;i++){
	        	if($('#register_form>div>form>p>span>select>option')[i].value.split('!')[1] != undefined){ 
                	$('#direction_cases>div>select')[0].innerHTML += '<option>'+$('#register_form>div>form>p>span>select>option')[i].value.split('!')[0]+'</option>';
                	if($('#register_form>div>form>p>span>select>option')[i].value.split('@')[1] != undefined){
                		$('#direction_cases>div>.d-none')[0].innerHTML += "<div class='optionsData'><div class='name'>"+$('#register_form>div>form>p>span>select>option')[i].value.split('!')[0]+"</div><div class='data'>"+$('#register_form>div>form>p>span>select>option')[i].value.split('!')[1].split('@')[0]+"</div><div class='doc'>"+$('#register_form>div>form>p>span>select>option')[i].value.split('@')[1]+"</div></div>";
                	}
                	else{
                		$('#direction_cases>div>.d-none')[0].innerHTML += "<div class='optionsData'><div class='name'>"+$('#register_form>div>form>p>span>select>option')[i].value.split('!')[0]+"</div><div class='data'>"+$('#register_form>div>form>p>span>select>option')[i].value.split('!')[1]+"</div><div class='doc'></div></div>";
                	}
                	$('#register_form>div>form>p>span>select>option')[i].text = $('#register_form>div>form>p>span>select>option')[i].value.split('!')[0];
            	}
            	else if($('#register_form>div>form>p>span>select>option')[i].value.split('@')[1] != undefined){
            		$('#direction_cases>div>select')[0].innerHTML += '<option>'+$('#register_form>div>form>p>span>select>option')[i].value.split('@')[0]+'</option>';
            		$('#direction_cases>div>.d-none')[0].innerHTML += "<div class='optionsData'><div class='name'>"+$('#register_form>div>form>p>span>select>option')[i].value.split('@')[0]+"</div><div class='data'></div><div class='doc'>"+$('#register_form>div>form>p>span>select>option')[i].value.split('@')[1]+"</div></div>";
            		$('#register_form>div>form>p>span>select>option')[i].text = $('#register_form>div>form>p>span>select>option')[i].value.split('@')[0];
            	}
            	else{
            		$('#direction_cases>div>select')[0].innerHTML += '<option>'+$('#register_form>div>form>p>span>select>option')[i].value+'</option>';
            		$('#direction_cases>div>.d-none')[0].innerHTML += "<div class='optionsData'><div class='name'>"+$('#register_form>div>form>p>span>select>option')[i].value.split('!')[0]+"</div><div class='data'></div><div class='doc'></div></div>";
            	}
            	
            }
            $('#roadmapAreas>.name')[0].innerText = $('#direction_cases>div>.d-none>.optionsData>.name')[$('#direction_cases>div>select')[0].selectedIndex].innerText;
            $('#roadmapAreas>.data')[0].innerHTML = 'Дата проведения:'+$('#direction_cases>div>.d-none>.optionsData>.data')[$('#direction_cases>div>select')[0].selectedIndex].innerText;
			$('#roadmapAreas>.doc')[0].innerHTML = 'Скачать документы: <a href="'+$('#direction_cases>div>.d-none>.optionsData>.doc')[$('#direction_cases>div>select')[0].selectedIndex].innerText+'">'+$('#direction_cases>div>.d-none>.optionsData>.doc')[$('#direction_cases>div>select')[0].selectedIndex].innerText+'</a>';
	        
			$('#direction_cases>div>select').change(function() {
			    $('#roadmapAreas>.name')[0].innerText = $('#direction_cases>div>.d-none>.optionsData>.name')[$('#direction_cases>div>select')[0].selectedIndex].innerText;
			    if($('#direction_cases>div>.d-none>.optionsData>.data')[$('#direction_cases>div>select')[0].selectedIndex].innerText != ""){
			    	$('#roadmapAreas>.data')[0].innerHTML = 'Дата проведения:'+$('#direction_cases>div>.d-none>.optionsData>.data')[$('#direction_cases>div>select')[0].selectedIndex].innerText;
			    }
			    else{
			    	$('#roadmapAreas>.data')[0].innerHTML = "";
			    }
			    if($('#direction_cases>div>.d-none>.optionsData>.doc')[$('#direction_cases>div>select')[0].selectedIndex].innerText != ""){
			    	$('#roadmapAreas>.doc')[0].innerHTML = 'Скачать документы: <a href="'+$('#direction_cases>div>.d-none>.optionsData>.doc')[$('#direction_cases>div>select')[0].selectedIndex].innerText+'">'+$('#direction_cases>div>.d-none>.optionsData>.doc')[$('#direction_cases>div>select')[0].selectedIndex].innerText+'</a>';
			    }
			    else{
			    	$('#roadmapAreas>.doc')[0].innerHTML = "";
			    }			    
			});
		}
		else{
			for(var i=0;i< $('#register_form>div>form>p>span>select>option').length;i++){
	        	if($('#register_form>div>form>p>span>select>option')[i].value.split('!')[1] != undefined){ 
                	$('#register_form>div>form>p>span>select>option')[i].text = $('#register_form>div>form>p>span>select>option')[i].value.split('!')[0];
            	}
            	else if($('#register_form>div>form>p>span>select>option')[i].value.split('@')[1] != undefined){
            		$('#register_form>div>form>p>span>select>option')[i].text = $('#register_form>div>form>p>span>select>option')[i].value.split('@')[0];
            	}            	
            }
			if(window.location.search == "?page_id=7"){
				let now = new Date().getFullYear();
				for(var i =0;i < (new Date().getFullYear() - 2017);i++){
					let date = new Date().getFullYear()-i;
					let count = 0;
					$('#directions')[0].innerHTML += '<div id="year_'+date+'" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>';
					$('#year_'+date).hide();
					$('#year_'+now).show();
					for(var j = 0;j < $('#directions>article').length;j++){
						if($('#directions>article>header>h3')[j].innerText.split(':')[1] == date){
							let ID = $('#directions>article')[j].id;
							let classes = $('#directions>article')[j].classList;
							$('#directions>article>header>h3')[j].innerText = $('#directions>article>header>h3')[j].innerText.split(':')[0];
							$('#year_'+date)[0].innerHTML += '<article id="'+ID+'" class="'+classes+'">'+$('#directions>article')[j].innerHTML+'</article>';
							count++;
						}
					}
				}
				let leng = $('#directions>article').length;
				for(let g = 0;g < leng;g++){
				 $('#directions>article')[0].remove();
				}
				$('#year_'+now).slick({
			            dots: false,
			            accessibility: false,
			            infinite: false,
			            speed: 300,
			            centerMode:true,
			            touchMove: true,
			            initialSlide: 0,
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
			}
			/*$('#directions').slick({
	            dots: true,
	            accessibility: false,
	            infinite: false,
	            speed: 300,
	            initialSlide:1,
	            centerMode:true,
	            touchMove: true,
	            slidesToShow: 3,
	            slidesToScroll: 2,
	            variableWidth: true,
	            responsive: [{
					breakpoint: 400,
					slidesToShow: 1,
					slidesToScroll: 1
			    }]
	          });*/
		}

		});


</script>
</body>
</html>
