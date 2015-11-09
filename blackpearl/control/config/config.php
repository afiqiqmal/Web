<?php
try{
	$con = new pdo('mysql:host=localhost;dbname=fp_db','root','');
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>

