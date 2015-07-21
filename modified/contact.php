<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Our Church is a premium HTML5 Church Website Template with Responsive design. Church Template includes many pages like Bulletin, Programs, events, sermons, ministries, working church contact form etc..">
<meta name="keywords" content="Church, Website, Template, Bulletin, Programs, Events, Themeforest, Premium, Charity, Non Profit ">
<meta name="author" content="Surjith SM">
<title>ST MARK COPTIC ORTHODOX CHURCH IN ROCHESTER | CONTACT US</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Church Template CSS -->
<link href="css/church.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.png">

<!-- Custom Google Font : Montserrat and Droid Serif -->

<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php include_once("includes/main-nav.php"); ?>
</div>
</div>

<!--SUBPAGE HEAD-->

<div class="subpage-head has-margin-bottom">
  <div class="container">
    <h3>Contact us</h3>
    <p class="lead">Our Church address and contact details</p>
  </div>
</div>

<!-- // END SUBPAGE HEAD -->

<div class="container">
  <div class="row">
    <div class="col-md-6 has-margin-bottom">
      <form id="phpcontactform" role="form">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
          <label>Email ID</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="mobile" id="mobile">
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea class="form-control" rows="5" name="message" id="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Send message</button>
        <span class="help-block loading"></span>
      </form>
    </div>
    <!--// col md 9-->
    
    <div class="col-md-6 has-margin-bottom">
      <h5>OUR ADDRESS</h5>
      <div class="row">
        <div class="col-lg-6">St. Mark's Coptic Orthodox Church<br>
          530 Lehigh Station Rd. West Henrietta <br>
          NY 14586</div>
        <div class="col-lg-6">Phone: +585 500 5237<br>
          
          Email: <a href="mailto:info@stmarksofrochester.org">info@stmarksofrochester.org</a></div>
      </div>
      <hr>
      
    </div>
  </div>
</div>

<!-- LOCATION MAP -->
<div class="location-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93262.1069610417!2d-77.65838817597651!3d43.07422641926951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d14c11d986666f%3A0xf8a12361d8eb9515!2sSt.+Mark&#39;s+Coptic+Orthodox+Church!5e0!3m2!1sen!2sca!4v1427004409443" height="260"></iframe>
</div>
<!-- // END LOCATION MAP  --> 

<!-- SUBSCRIBE -->
<div class="highlight-bg">
  <div class="container">
    <div class="row">
      <form action="subscribe.php" method="post" class="form subscribe-form" role="form" id="subscribeForm">
        <div class="form-group col-md-3 hidden-sm">
          <h5 class="susbcribe-head"> SUBSCRIBE <span>TO OUR NEWSLETTER</span></h5>
        </div>
        <div class="form-group col-sm-8 col-md-6">
          <label class="sr-only">Email address</label>
          <input type="email" class="form-control input-lg" placeholder="Enter email" name="email" id="address" data-validate="validate(required, email)" required>
          <span class="help-block" id="result"></span> </div>
        <div class="form-group col-sm-4 col-md-3">
          <button type="submit" class="btn btn-lg btn-primary btn-block">Subscribe Now →</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END SUBSCRIBE --> 

<?php include_once("includes/footer.php"); ?>

<!-- Bootstrap core JavaScript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/ketchup.all.js"></script> 
<script src="js/contact_form.js"></script> 

<!--============== SUBSCRIBE FORM =================--> 

<script>

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

</script> 

<!--============== SUBSCRIBE FORM =================--> 

<script>
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
</script>
</body>
</html>
