<?php
	include_once("config.php");
	
	$sql = mysql_query('INSERT INTO emailList (emailID, email) VALUES (NULL, "'.$_POST['email'].'")');
    echo "Got it, you've been added to our email list.";

?>