<?php

require "core/init.php";
include("../config/config.php");

//employee
if(isSet($_POST['email']))
{
	$email = addslashes($_POST['email']);
	$sql = "select email from tbl_employee where email=?";
	$query = $con->prepare($sql);
	$query->execute(array($email));
	
	if(!$query->rowCount())
		echo 0;
	else
		echo 1;
}
else if(isSet($_POST['tel']))
{
	$tel = addslashes($_POST['tel']);
	$sql = "select tel from tbl_employee where tel=?";
	$query = $con->prepare($sql);
	$query->execute(array($tel));
	
	if(!$query->rowCount())
		echo 0;
	else
		echo 1;
}

else if(isSet($_POST['icnumber']))
{
	$tel = addslashes($_POST['icnumber']);
	$sql = "select icnumber from tbl_employee where icnumber=?";
	$query = $con->prepare($sql);
	$query->execute(array($tel));
	
	if(!$query->rowCount())
		echo 0;
	else
		echo 1;
}
else if(isSet($_POST['data'])) // retrieve name of customer to display
    {
        $arrstr = explode('|',addslashes($_POST['data']));
    	$srch = $arrstr[0];
        $return_url = $arrstr[1]; 
    	$sql="";
    	if(preg_match('#[0-9]#', $srch)){
    		$srch = "%".$srch."%";
    		$sql = "select * from tbl_cust where cust_tel Like ?";
    		$query = $con->prepare($sql);
    		$query->execute(array($srch));
    
    		$str = "";
    		if($query->rowCount() == 0)
    		{
    			echo "<a style='pointer:none;' class='list-group-item list-group-item-danger'><i class='fa fa-exclamation-triangle'></i> No record</a>";
    		}
    		else
    		{
    			
    			while ($r = $query->fetch(PDO::FETCH_OBJ)) {
    				$tel = Crytion::encryt64($r->cust_tel);
    				$str .= "<a href='updatecart.php?cust_sel=".$tel."&return_url=".$return_url."' class='list-group-item list-group-item-info'>".$r->cust_fname."</a>";
    			}
    			echo $str;
    		}		
    	}
    	else
    	{
    		$srch = "%".$srch."%";
    		$sql = "select * from tbl_cust where cust_fname Like ?";
    		$query = $con->prepare($sql);
    		$query->execute(array($srch));
    
    		$str = "";
    		if($query->rowCount() == 0)
    		{
    			echo "<a style='pointer:none;' class='list-group-item list-group-item-danger'><i class='fa fa-exclamation-triangle'></i> No record</a>";
    		}
    		else
    		{
    			while ($r = $query->fetch(PDO::FETCH_OBJ)) {
    				$id = Crytion::encryt64($r->cust_id);
    				$str .= "<a href='updatecart.php?cust_sel=".$id."&return_url=".$return_url."' class='list-group-item list-group-item-info'>".$r->cust_fname."</a>";
    			}
    			echo $str;
    		}
    	}
    }


?>