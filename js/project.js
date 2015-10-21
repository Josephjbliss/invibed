$(document).ready(function(){
	$(".button.email-submit").click(function(){
		$(".mc4wp-form form").submit();
	});

	$("li.categories").click(function(){
		window.location = $(this).find("a").attr("href");
	});
	
	$("#featured #hero .slide").eq(0).addClass("current");
	$("#latest a").eq(0).addClass("current");

	$("#latest a").hover(function(){
		$(this).addClass("current");
		$("#featured #hero .slide.current").removeClass("current");
		$("#featured #hero .slide").eq($("#latest a.current").index()-1).addClass("current");
	}, function(){		
		$(this).removeClass("current");
	});

	$(".article-main").fitVids();
});

$(document).ajaxComplete(function() {
	if($("div.cards-img").length < 4){
		$("div.cards-img").css("border-top", "1px solid #E3E3E3");
		$("#cards-main").css("border-top", "none");
	}
});

$(window).scroll(function(){
	if(!$(".footer-wrapper").hasClass("sticky")) { 
		if ($(window).scrollTop() > 150) { //$("#featured").offset().top
			// $(".footer-wrapper").addClass("sticky").hide().fadeIn(200);
		 	$(".footer-wrapper").addClass("sticky");
		}
	}
	else {
		if($(window).scrollTop() < 150) { //$("#featured").offset().top
			// $(".footer-wrapper").fadeOut(200, function(){
			// 	$(this).removeClass("sticky");
			// });		
		 	$(".footer-wrapper").removeClass("sticky");
		}
	}
});

