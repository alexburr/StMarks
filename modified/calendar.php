<?php include_once("includes/header.php"); ?>
<body>
<?php include_once("includes/main-nav.php"); ?>

<!--SUBPAGE HEAD-->

<div class="subpage-head has-margin-bottom">
  <div class="container">
    <h3>Calendar</h3>
    <p class="lead">Our Church Calendar</p>
  </div>
</div>

<!-- // END SUBPAGE HEAD -->

<div class="container has-margin-bottom">
  <div class="row">
    <div class="col-md-9 has-margin-bottom">
<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=qf9ln03p7u958n67qp9c3vkb4s%40group.calendar.google.com&amp;color=%23B1365F&amp;src=2fmnnvjd0fom8a2lp2o5fcutsk%40group.calendar.google.com&amp;color=%235F6B02&amp;src=bro3fpm9i33j7ndri9k2hf3e44%40group.calendar.google.com&amp;color=%232952A3&amp;src=p9h2ilvbj1mjv625d6ct9a4jio%40group.calendar.google.com&amp;color=%2328754E&amp;src=o0ivvn277u4bt1ldui3c833gns%40group.calendar.google.com&amp;color=%230F4B38&amp;src=q0mt9tfc22dkm1aghnd44h3eko%40group.calendar.google.com&amp;color=%2342104A&amp;ctz=America%2FToronto" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>     
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
</body>
</html>
