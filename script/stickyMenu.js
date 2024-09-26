
	$(document).ready(function() {
	var MenuY = $('.menu').offset().top;
	
    
	var stickyMenu = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > MenuY) { 
		$('.menu').addClass('sticky');
	} else {
		$('.menu').removeClass('sticky'); 
	}
	};
	 
	stickyMenu();
	 
	$(window).scroll(function() {
		stickyMenu();
	});
	});
	