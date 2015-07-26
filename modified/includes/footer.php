<!-- SUBSCRIBE -->
<div class="highlight-bg">
	<div class="container">
		<div class="row">
			<form action="subscribe.php" method="post" class="form subscribe-form" role="form" id="subscribeForm">
				<div class="form-group col-md-3 hidden-sm">
					<h5 class="susbcribe-head">SUBSCRIBE <span>TO OUR NEWSLETTER</span></h5>
				</div>
				<div class="form-group col-sm-8 col-md-6">
					<label class="sr-only">Email address</label>
					<input type="email" class="form-control input-lg" placeholder="Enter email" name="email" id="address" data-validate="validate(required, email)" required>
					<span class="help-block" id="result"></span>
				</div>
				<div class="form-group col-sm-4 col-md-3">
					<button type="submit" class="btn btn-lg btn-primary btn-block">Subscribe Now →</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- END SUBSCRIBE --> 
<!-- FOOTER -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<h5>ABOUT THE CHURCH</h5>
				<p>For the word of God is living and active. Sharper than any double-edged sword, it penetrates even to dividing soul and spirit, joints and marrow; it judges the thoughts and attitudes.</p>
			</div>
			<div class="col-sm-6 col-md-3">
				<h5>QUICK LINKS</h5>
				<ul class="footer-links">
					<li><a href="calendar.php">Calendar</a></li>
					<li><a href="our-faith.php">Our Faith</a></li>
					<li><a href="#">Donate</a></li>
					<li><a href="contact.php">Contact us</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-3">
				<h5>OUR ADDRESS</h5>
				<p>St. Mark's Coptic Orthodox Church<br>
				530 Lehigh Station Rd. West Henrietta <br>
				NY 14586<br>
				<br>
				Phone: +585 500 5237<br>
				Email: <a href="mailto:info@stmarksofrochester.org">info@stmarksofrochester.org</a></p>
			</div>
			<div class="col-sm-6 col-md-3">
				<h5>CONNECT</h5>
				<div class="social-icons"><a href="#"><img src="images/fb-icon.png" alt="social"></a> <a href="#"><img src="images/tw-icon.png" alt="social"></a> <a href="#"><img src="images/in-icon.png" alt="social"></a></div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<p class="text-center">Copyright &copy;<?php echo date("Y") ?> All rights reserved</p>
		</div>
	</div>
</footer>
<!-- END FOOTER --> 
<?php
	include_once("includes/global-js.php");
?>
</body>
</html>