jQuery(function( $ ){

	$(".nav-primary .genesis-nav-menu, .nav-secondary .genesis-nav-menu").addClass("responsive-menu").before('<div class="responsive-menu-icon"></div>');

	$(".responsive-menu-icon").click(function(){
		$(this).next(".nav-primary .genesis-nav-menu, .nav-secondary .genesis-nav-menu").slideToggle();
	});

	$(window).resize(function(){
		if(window.innerWidth > 768) {
			$(".nav-primary .genesis-nav-menu, .nav-secondary .genesis-nav-menu, nav .sub-menu").removeAttr("style");
			$(".responsive-menu > .menu-item").removeClass("menu-open");
		}
	});

	$(".responsive-menu > .menu-item").click(function(event){
		if (event.target !== this)
		return;
			$(this).find(".sub-menu:first").slideToggle(function() {
			$(this).parent().toggleClass("menu-open");
		});
	});

	//Stick Nav
	stickyNavTop = $('.nav-primary').offset().top;  

	var stickyNav = function(){  
	var scrollTop = $(window).scrollTop();  
   
	if (scrollTop > stickyNavTop && $(window).width() > 768) {   
		$('.nav-primary').addClass('sticky');
		// $(".simple-social-icons ul.aligncenter").css({"position": "fixed", "top": "0"});
		$(".genesis-nav-menu li").css("float", "left");
	} 
	else {  
		$('.nav-primary').removeClass('sticky');
		// if($(window).width() < 480) {
		// 	$(".simple-social-icons ul.aligncenter").css({"position": "absolute", "top": "155px"});			
		// }
		// else {
		// 	$(".simple-social-icons ul.aligncenter").css({"position": "absolute", "top": "192px"});
		// }
		$(".genesis-nav-menu li").css("float", "none");
	}  
	};

	stickyNav();  

	$(window).scroll(function() {  
		stickyNav();  
	});  

});