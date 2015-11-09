<?php
try{
	$con = new pdo('mysql:host=localhost;dbname=test','root','');
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>