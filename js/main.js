$( document ).ready(function() {
new WOW().init();
var header = $('#pageHeader'),
	scrollPrev = 0;
	$(window).scroll(function() {
		var scrolled = $(window).scrollTop();
	 
		if ( scrolled > 100 && scrolled > scrollPrev ) {
			header.addClass('out');
		} else {
			header.removeClass('out');
		}
		scrollPrev = scrolled;
	});

})