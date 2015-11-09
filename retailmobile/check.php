
<?php
session_start();

include("config/config.php");

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

?>