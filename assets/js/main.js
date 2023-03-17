$(document).ready(function () {
    $(function() {
		$(".mob-nav-toggle").on("click", function() {
			if ($("nav").hasClass("mob-nav-open")) {
				$("nav").removeClass("mob-nav-open");
				$("body").removeClass("nav-scroll");
				$(".homepage-logo").removeClass("homepage-logo-fixed");
				var text = $(this).text();
				text = text.replace("Sulge", "Menüü");
				text = text.replace("Close", "Menu");
				text = text.replace("Закрыть", "Mеню");
				$(this).text(text);				
				
			} else {
				$("nav").addClass("mob-nav-open");
				$("body").addClass("nav-scroll");
				$(".homepage-logo").addClass("homepage-logo-fixed");
				var text = $(this).text();
				text = text.replace("Menüü", "Sulge");
				text = text.replace("Menu", "Close");
				text = text.replace("Mеню", "Закрыть");
				$(this).text(text);					
			}
		});
	});	
	
	$(function() {
		$(".mob-nav-toggle").on("click", function() {
			if ($(".nav-item").hasClass("nav-item-active")) {
				$(".nav-item").removeClass("nav-item-active");
				$('html').removeClass('no-scroll');
			} else {
				$(".nav-item").addClass("nav-item-active");
				$('html').addClass('no-scroll');
			}
		});
	});	

	const swiper = new Swiper('.swiper', {
		loop: true,
		watchOverflow: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			dynamicBullets: true,
			dynamicMainBullets: 2,
		},
		autoplay: {
			delay: 5000,
			pauseOnMouseEnter: true,
		},	
		preloadImages: false,	
		mousewheel: true,
	});
	
	const tobii = new Tobii({
		draggable: true,
		keyboard: true,
		counter: false,
		zoom: false,
	});	
	
	window.addEventListener("load",function() {
		setTimeout(function(){
			// This hides the address bar:
			window.scrollTo(0, 1);
		}, 0);
	});	

	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) { //use `this`, not `document`
			$( ".anchor-link" ).fadeOut(1000);
		}
	});

	$(window).bind("load resize",function() {
		if($(window).width() < 1367)
		{
			swiper.mousewheel.disable()
		} else {
			swiper.mousewheel.enable()
		}	
	});
	
	$(window).bind("load resize", function() {});
});