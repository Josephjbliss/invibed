jQuery(function( $ ){
	$(".widget.widget_mc4wp_widget").hide();

	$("#close").click(function(){
		$.cookie("closed", "closed");
		$(".widget.widget_mc4wp_widget").stop().fadeOut(500);
		$(".site-footer").css({marginBottom: 0});
	});

	$(window).scroll(function() {
		var myHeight = $(".widget.widget_mc4wp_widget").height();
		// alert(myHeight);

		if ($(window).scrollTop() > 0 && $(".widget.widget_mc4wp_widget").css("display") == "none" && $.cookie("closed") != "closed") {
			$(".site-footer").css({marginBottom: myHeight});
			$(".widget.widget_mc4wp_widget").stop().fadeIn(500);
		}
		else if ($(window).scrollTop() == 0) {
			$(".widget.widget_mc4wp_widget").stop().fadeOut(500);
			$(".site-footer").css({marginBottom: 0});
		}
	}); 
});