<?php
	$username = "root";
	$password = "";
	$hostname = "localhost";
	$db_name = "fp_db";

	$dbhandle = mysql_connect($hostname, $username, $password)
		or die("Unable to connect to MYSQL");

	$selected = mysql_select_db($db_name, $dbhandle)
		or die("Could not select database");

		
?>