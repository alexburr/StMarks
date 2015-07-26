// subscribe form
$(function(){
 var shrinkHeader = 300;
  $(window).scroll(function() {
	var scroll = getCurrentScroll();
	  if ( scroll >= shrinkHeader ) {
		   $('.navbar').addClass('shrink');
		}
		else {
			$('.navbar').removeClass('shrink');
		}
	});
  
	function getCurrentScroll() {
		return window.pageYOffset || document.documentElement.scrollTop;
	}
});

$(document).ready(function() {
	// subscribe form
	$('#subscribeForm').ketchup().submit(function() {
		if ($(this).ketchup('isValid')) {
			var action = $(this).attr('action');
			$.ajax({
				url: action,
				type: 'POST',
				data: {
					email: $('#address').val()
				},
				success: function(data){
					$('#result').html(data);
				},
				error: function() {
					$('#result').html('Sorry, an error occurred.');
				}
			});
		}
		return false;
	});
	
	// navigation
	$('#aboutMainBtn').addClass('active');
	
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