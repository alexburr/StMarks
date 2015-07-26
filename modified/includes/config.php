<?php
	$iniConfig = parse_ini_file("config.ini", true);
	$dbConfig = $iniConfig['db'];
	$titleConfig = $iniConfig['titles'];
	$calendarConfig = $iniConfig['calendar'];
	$pageName = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
	
	$pageTitle = $iniConfig['titles']['site'];
	$pageHeading = "";
	$pageSubheading = "";
	
	if ($pageName != "index") {
		$pageTitle = $pageTitle . " | " . strtoupper($iniConfig['titles'][$pageName]);
		$pageHeading = $iniConfig['titles'][$pageName];
	}
	
	if ($pageName != "index") {
		$pageSubheading = $iniConfig['subTitles'][$pageName];
	}

	/*$connection = mysql_connect($dbConfig['hostname'], $dbConfig['login'], $dbConfig['pw']) or die ($dbConfig['errConnect']);*/
	/*$db = mysql_select_db($dbConfig['db']) or die ($dbConfig['errDb']);*/
?>