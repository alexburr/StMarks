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
	$('#aboutMainBtn').addClass('active');
});