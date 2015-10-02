$(document).ready(function(){
	$(".button.email-submit").click(function(){
		$(".mc4wp-form form").submit();
	});

	// NOT WORKING
	// $("li.categories").click(function(){
	// 	$(this).find("a").trigger("click");
	// });
	
	$("#featured #hero .slide").eq(0).addClass("current");

	$("#latest a").hover(function(){
		$(this).addClass("current");
		$("#featured #hero .slide.current").removeClass("current");
		$("#featured #hero .slide").eq($("#latest a.current").index()-1).addClass("current");
	}, function(){		
		$(this).removeClass("current");
	});
});