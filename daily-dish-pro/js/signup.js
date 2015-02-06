jQuery(function( $ ){
	$(".widget.widget_mc4wp_widget").hide();

	$("#close").click(function(){
		$.cookie("closed", "closed", { expires: 7 }); // Cookie expires in 1 week
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

	// $(".mc4wp-alert, .mc4wp-success, .mc4wp-error").delay(5000).fadeOut(1000, function(){
	// 	$(this).remove();
	// });
});