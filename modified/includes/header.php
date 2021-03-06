<?php include_once("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Our Church is a premium HTML5 Church Website Template with Responsive design. Church Template includes many pages like Bulletin, Programs, events, sermons, ministries, working church contact form etc..">
	<meta name="keywords" content="Church, Website, Template, Bulletin, Programs, Events, Themeforest, Premium, Charity, Non Profit ">
	<meta name="author" content="Surjith SM">
	<title><?php echo($pageTitle); ?></title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Church Template CSS -->
	<link href="css/church.css" rel="stylesheet">
	<link href="css/fancybox.css" rel="stylesheet">
	<link href="css/stmarks.css" rel="stylesheet">
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
<?php
	if ($pageName == "index") { ?>
		<div class="homepage-head">
			<?php include_once("includes/banner.php"); ?>
		</div>
	<?php } else { ?>
		<!-- SUBPAGE HEAD -->
		<div class="subpage-head has-margin-bottom">
			<div class="container">
				<h3><?php echo $pageHeading; ?></h3>
				<p class="lead"><?php echo $pageSubheading; ?></p>
			</div>
		</div>
		<!-- END SUBPAGE HEAD -->
	<?php } 
?>