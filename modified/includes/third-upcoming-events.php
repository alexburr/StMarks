<!--MAKE DYNAMIC-->
<!--Upcoming Events-->
<?php 
	include_once("includes/config.php");
	/*$sql = mysql_query("SELECT * FROM upcomingEvents WHERE eExpiry > NOW() ORDER BY eDateTime ASC LIMIT 4");*/
?>

    <div class="col-md-3 visible-md-block visible-lg-block">
      <div class="well">
        <div class="section-title">
          <h4> UPCOMING EVENTS </h4>
        </div>
        <a href="#"><img src="images/thumb-1.jpg" class="img-responsive center-block" alt="video thumb"></a>
        <div class="list-group"> 
			<?php 
			/*
				while($r = mysql_fetch_array($sql)){
					echo 	'<a href="calendar.php" class="list-group-item">
			  <p class="list-group-item-heading">'.$r['eTitle'].'</p>
			  <p class="list-group-item-text">'.$r['eTime'].'</p>
			  </a>';
				}*/
			?>
		</div>
      </div>
<!-- END UPCOMING EVENTS --> 