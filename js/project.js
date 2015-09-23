$(document).ready(function(){
	$(".button.email-submit").click(function(){
		$(".mc4wp-form form").submit();
	});

	// NOT WORKING
	// $("li.categories").click(function(){
	// 	$(this).find("a").trigger("click");
	// });
	
	$("#featured #hero img").eq(0).addClass("current");

	$("#latest a").hover(function(){
		$(this).addClass("current");
		$("#featured #hero img.current").removeClass("current");
		$("#featured #hero img").eq($("#latest a.current").index()-1).addClass("current");
	}, function(){		
		$(this).removeClass("current");
	});
});