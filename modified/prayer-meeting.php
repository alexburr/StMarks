<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Our Church is a premium HTML5 Church Website Template with Responsive design. Church Template includes many pages like Bulletin, Programs, events, sermons, ministries, working church contact form etc..">
<meta name="keywords" content="Church, Website, Template, Bulletin, Programs, Events, Themeforest, Premium, Charity, Non Profit ">
<meta name="author" content="Surjith SM">
<title>ST MARK'S COPTIC ORTHODOX CHURCH ROCHESTER | PRAYER MEETING</title>
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
<!--// Navbar Ends--> 

<!--SUBPAGE HEAD-->

<div class="subpage-head has-margin-bottom">
  <div class="container">
    <h3>Prayer Meeting</h3>
    <p class="lead">Meets every Wednesday night from 7:00 - 9:00 in the main church</p>
  </div>
</div>

<!-- // END SUBPAGE HEAD -->

<div class="container has-margin-bottom">
  <div class="row">
    <div class="col-md-9 has-margin-bottom">
    <img src="images/prayer.jpg" width="100%">
      <p class="lead"> “...pray for one another, that you may be healed. The effective,

fervent prayer of a righteous man avails much (James 5:16)</p>


<p>The way to build a relationship with God is to talk to him through prayer. The prayer meeting is a combination of spiritual songs, agpeya, and individual prayers.</p>
<p>Saint Augustine said, "Prayer is the key of heaven, the protection of our souls, the source of all virtues, the ladder which ascends us to God, the work of angels, and the foundation of faith." Prayer is also the way of repentance.  As Saint Isaac has said, "Whoever thinks that there is another way for repentance rather than prayer is deceived by Satan."  A great promise made by our Lord Jesus Christ himself reads, "whatever things you ask in prayer, believing, you will receive." Matthew 21:22</p>

     
    </div>
    <!--// col md 9--> 
    
 <?php include_once("includes/third-upcoming-events.php"); ?>

    </div>
  </div>
</div>


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
	$('#serviceMainBtn').addClass('active');
});
</script>
</body>
</html>
