
<?php
session_start();

include("../../config/config.php");

if(isset($_POST['tel']))
{
	$tel = $_POST['tel'];
	$sql = "select cust_tel from tbl_cust where cust_tel=?";
	$query = $con->prepare($sql);
	$query->execute(array($tel));
	
	if($query->rowCount()==0)
		echo 0;
	else
		echo 1;
}

else if(isset($_POST['email']))
{
	$tel = $_POST['email'];
	$sql = "select cust_email from tbl_cust where cust_email=?";
	$query = $con->prepare($sql);
	$query->execute(array($tel));
	
	if($query->rowCount()==0)
		echo 1;
	else
		echo 0;
}

?>