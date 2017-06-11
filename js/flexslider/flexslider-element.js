/*
 * jQuery FlexSlider v2.2.0
 * Copyright 2012 WooThemes
 * Created by ----Shahid
 */
 
$(window).load(function(){
		  $('.flexslider').flexslider({	
			animation: "slide",
			animationSpeed: 1500,
			direction: "horizontal",
			
			directionNav: true, 
			//prevText: "Previous",          
			//nextText: "Next",
			controlNav: true,			
			
			slideshowSpeed: 2500,
			pauseOnHover: true, 
			slideshow: true,
			start: function(slider){
			  $('body').removeClass('loading');
			}			
		  });
		  
		  
		});