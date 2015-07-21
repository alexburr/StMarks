$(document).ready(function() {
	// image gallery 
	$('.fancybox').fancybox();
	
	// event carousel
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		navText: [
		  "<span class='nav-arrow left'></i>",
		  "<span class='nav-arrow right'></i>"
		  ],
		responsive:{
			0:{
				items:1
			},
			550:{
				items:2
			},
			768:{
				items:3
			},
			992:{
				items:4
			}
		}
	})

	$('.owl-carousel2').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		navText: false,
		responsive:{
			0:{
				items:1
			}
		}
	})
});