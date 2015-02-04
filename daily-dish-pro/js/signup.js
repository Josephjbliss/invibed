jQuery(function( $ ){
	$(".widget.widget_mc4wp_widget").hide();

	$(window).scroll(function() {  
		if ($(window).scrollTop() > 0 && $(".widget.widget_mc4wp_widget").css("display") == "none") {
			$(".widget.widget_mc4wp_widget").stop().fadeIn(500);
		}
		else if ($(window).scrollTop() == 0) {
			$(".widget.widget_mc4wp_widget").stop().fadeOut(500);
		}
	}); 
});