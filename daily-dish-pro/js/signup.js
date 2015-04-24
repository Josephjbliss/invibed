jQuery(function( $ ){
	$("#mc4wp-form-1").hide();

	$(".close").click(function(){
		$.cookie("closed", "closed", { expires: 7 }); // Cookie expires in 1 week
		$("#mc4wp-form-1").stop().fadeOut(500);
		$(".site-footer").css({marginBottom: 0});
	});

	$(window).scroll(function() {
		var myHeight = $("#mc4wp-form-1").height();
		// alert(myHeight);

		if ($(window).scrollTop() > 0 && $("#mc4wp-form-1").css("display") == "none" && $.cookie("closed") != "closed") {
			$(".site-footer").css({marginBottom: myHeight});
			$("#mc4wp-form-1").stop().fadeIn(500);
		}
		else if ($(window).scrollTop() == 0) {
			$("#mc4wp-form-1").stop().fadeOut(500);
			$(".site-footer").css({marginBottom: 0});
		}
	}); 

	// $(".mc4wp-alert, .mc4wp-success, .mc4wp-error").delay(5000).fadeOut(1000, function(){
	// 	$(this).remove();
	// });
});