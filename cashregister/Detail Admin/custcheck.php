
<?php
    require "core/init.php";
    
    require("../config/config.php");
    
    
    //session start
    //customer
    if(isSet($_POST['email']))//checking duplication of email in customer
    {
    	$email = addslashes($_POST['email']);
    	$sql = "select cust_email from tbl_cust where cust_email=?";
    	$query = $con->prepare($sql);
    	$query->execute(array($email));
    	
    	if(!$query->rowCount())
    		echo 0;
    	else
    		echo 1;
    }
    else if(isSet($_POST['tel']))//checking duplication of tel no in customer
    {
    	$tel = addslashes($_POST['tel']);
    	$sql = "select cust_tel from tbl_cust where cust_tel=?";
    	$query = $con->prepare($sql);
    	$query->execute(array($tel));
    	
    	if(!$query->rowCount())
    		echo 0;
    	else
    		echo 1;
    }
    else if(isSet($_POST['uname']))//checking duplication of tel no in customer
    {
    	$tel = addslashes($_POST['uname']);
    	$sql = "select cust_uname from tbl_cust where cust_uname=?";
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
    else
    if(isSet($_POST['check']))
    {
        $exist = $this->_db->get('tbl_goods',array('goods_id','=',$_POST['check']));
        if($exist->count()==1)
            echo '1';
        else
            echo '0';
    }



?>