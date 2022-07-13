
	$(document).ready(function(){
		$(window).scroll(function(){
			$(".slideanim").each(function(){
				var pos = $(this).offset().top;
				var wintop = $(window).scrollTop();
					if(pos<wintop+500){
						$(this).addClass("slidee");
				}
			});
		});
	});

	$(document).ready(function(){
		$(window).scroll(function(){
			$(".slideanimX").each(function(){
				var pos = $(this).offset().top;
				var wintop = $(window).scrollTop();
					if(pos<wintop+500){
						$(this).addClass("slideX");
				}
			});
		});
	});

	$(document).ready(function(){
		$(window).scroll(function(){
			$(".slideanimY").each(function(){
				var pos = $(this).offset().top;
				var wintop = $(window).scrollTop();
					if(pos<wintop+500){
						$(this).addClass("slideY");
				}
			});
		});
	});

