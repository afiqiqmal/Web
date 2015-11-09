<?php
session_start();
include 'config.php';

//empty cart by destroying current session
if(isset($_GET['emptycart']) && $_GET['emptycart'] ===1)
{
	$return_url = base64_decode($_POST['return_url']); 
	unset($_SESSION['products']);
    unset($_SESSION['add-pay']);

	header('Location:'.$return_url);
}

if(isset($_POST['check'])){
    $product_code = $_POST['check'];
    $results = mysql_query("Select * from food_tbl where food_id ='$product_code' LIMIT 1") or die(mysql_error());
    
    if(mysql_num_rows($results) == 0)
        echo 0;
    else
        echo 1;    
}

if(isset($_POST['browse'])){
    $product_code = $_POST['browse'];
    $product = explode('|',$product_code); 
    $results = mysql_query("Select * from food_tbl where food_type ='$product[0]'") or die(mysql_error());
    
    if(mysql_num_rows($results) > 0){
        $count = 1;
        $str = "";
        while($obj = mysql_fetch_array($results)){
            if($count == 1){
                $str .= '<div class="row-fluid" style="text-align:center;margin-top:10px">';
            }
            $str .= "<a href='updatecart1.php?type=search&scan_item=".$obj['food_id']."&return_url=".$product[1]."' class='btn btn-warning span2' id='".$obj['food_id']."'>".$obj['food_name']."</a>";
            if($count == 6){
                $str .= '</div>';
                $count = 0;
            }
            $count++; 
        }
        
        if(substr($str,strlen($str)-5,strlen($str)) != "</div>")
            $str .= '</div>';
        
        echo $str;
    }
}

if(isset($_POST['browsen'])){
    $product_code = $_POST['browsen'];
    $product = explode('|',$product_code); 
    $results = mysql_query("Select * from food_tbl where food_id LIKE '%$product[0]%'
                            OR food_type LIKE '%$product[0]%'
                            OR food_name LIKE '%$product[0]%'") or die(mysql_error());
    if(mysql_num_rows($results) > 0){
        $count = 1;
        $str = "";
        while($obj = mysql_fetch_array($results)){
            if($count == 1){
                $str .= '<div class="row-fluid" style="text-align:center;margin-top:10px">';
            }
            $str .= "<a href='updatecart1.php?type=search&scan_item=".$obj['food_id']."&return_url=".$product[1]."' class='btn btn-warning span2 choose-food' id='".$obj['food_id']."'>".$obj['food_name']."</a>";
            if($count == 6){
                $str .= '</div>';
                $count = 0;
            }
            $count++; 
        }
        
        if(substr($str,strlen($str)-5,strlen($str)) != "</div>")
            $str .= '</div>';
        
        echo $str;
    }
}

if(isset($_POST['stud_check'])){
    $id = $_POST['stud_check'];
    $return_url = base64_decode($_POST['return_url']);
    $results = mysql_query("Select * from student_tbl where stud_id = '$id'") or die(mysql_error());
    if(mysql_num_rows($results) > 0){
        $obj = mysql_fetch_array($results);

        $_SESSION['select_cust'] = $id;
    }
    else{
        unset($_SESSION['select_cust']);
        unset($_SESSION['products']);
        unset($_SESSION['add-pay']);
    }

    header('Location:'.$return_url);
}

//add item in shopping cart
if((isset($_POST['type']) || isset($_GET['type'])) && ($_POST['type'] == 'search' || $_GET['type'] == 'search'))
{
    if (isset($_POST['scan_item']))
	   $product_code = $_POST['scan_item'];
    else if (isset($_GET['scan_item']))
        $product_code = $_GET['scan_item'];    
    
    if(isset($_POST['return_url']))
	   $return_url = base64_decode($_POST['return_url']); 
    else if(isset($_GET['return_url']))
	   $return_url = base64_decode($_GET['return_url']); 
	        
            $qty = 1;
            $results = mysql_query("Select * from food_tbl where food_id ='$product_code' LIMIT 1") or die(mysql_error());
            
            if (mysql_num_rows($results) > 0) {
                $obj = mysql_fetch_array($results);                                    
                $new_product = array(array('food_id'=>$obj['food_id'],
                                            'food_name'=>$obj['food_name'],
                                            'food_qty'=>$qty,
                                            'food_price'=>$obj['food_price']));
                
                $product = array();
                if(isset($_SESSION['products'])) //if we have the session
                {
                    $found = false; //set found item to false
                    
                    foreach ($_SESSION['products'] as $cart_itm) //loop through session array
                    {
                        if($cart_itm["food_id"] == $product_code){ //the item exist in array
                            $cart_itm["food_qty"] += $qty;
                            $qty = $cart_itm["food_qty"]; 
                            $product[] = array('food_id'=>$cart_itm['food_id'],
                                            'food_name'=>$cart_itm['food_name'],
                                            'food_qty'=>$qty,
                                            'food_price'=>$cart_itm['food_price']);
                            $found = true;
                        }else{
                            $product[] = array('food_id'=>$cart_itm['food_id'],
                                            'food_name'=>$cart_itm['food_name'],
                                            'food_qty'=>$cart_itm['food_qty'],
                                            'food_price'=>$cart_itm['food_price']);
                        }
                    }
                    
                    if($found == false)
                    {
                        $_SESSION['products'] = array_merge($product, $new_product);
                    }else{
                        $_SESSION['products'] = $product;
                    }
                    
                }else{
                    $_SESSION['products'] = $new_product;
                }
                
            }

	header('Location:'.$return_url);
}

//update item

if(isset($_POST['type']) && $_POST['type'] == 'update'){
    $product_code = $_POST['food_id'];
    $qty = $_POST['food_qty'];
    $return_url = base64_decode($_POST['return_url']);

            $product = array();

            if(isset($_SESSION['products'])){
                $found = false;
                foreach ($_SESSION['products'] as $cart_itm) //loop through session array
                {
                    if($cart_itm["food_id"] == $product_code){ //the item exist in array
                    $product[] = array('food_id'=>$cart_itm['food_id'],
                                            'food_name'=>$cart_itm['food_name'], 
                                            'food_qty' => $qty,
                                            'food_price'=>$cart_itm['food_price']);
                    $found = true;
                    }else{
                        //item doesn't exist in the list
                         $product[] = array('food_id'=>$cart_itm['food_id'],
                                            'food_name'=>$cart_itm['food_name'],
                                            'food_qty'=>$cart_itm['food_qty'],
                                            'food_price'=>$cart_itm['food_price']);
                    }
                }
                    
                if($found == true)
                {
                  $_SESSION['products'] = $product;
                }
            }
    header('Location:'.$return_url);
}


//detach customer
if(isset($_GET['detach']) && $_GET['detach'] == 1){
    $return_url = base64_decode($_GET['return_url']);
    unset($_SESSION['select_cust']);
    header('Location:'.$return_url);
}

//cancel sales
if(isset($_GET['detach']) && $_GET['detachall']==1){
    $return_url = base64_decode($_GET['return_url']); 
    unset($_SESSION['select_cust']);
    unset($_SESSION['products']);
    unset($_SESSION['add-pay']);
    header('Location:'.$return_url);
}

//remove item from shopping cart
if(isset($_GET['removep']) && $_GET['return_url'] && isset($_SESSION['products']))
{
	$code 	= $_GET['removep'];
	$return_url = base64_decode($_GET['return_url']); 

    $product = array();
    foreach ($_SESSION['products'] as $cart_itm) //loop through session array var
    {
        if($cart_itm["food_id"]!=$code){ //item does,t exist in the list
            $product[] = array('food_id'=>$cart_itm['food_id'],
                                                'food_name'=>$cart_itm['food_name'],
                                                'food_qty'=>$cart_itm['food_qty'],
                                                'food_price'=>$cart_itm['food_price']);
        }
        $_SESSION['products'] = $product;
    }
                
    if(empty($product))
        unset($_SESSION['add-pay']);
             
             
     
    header('Location:'.$return_url);
}

if(isset($_GET['complete']) && $_GET['complete'] == md5('complete')){
    
    $return_url = base64_decode($_GET['return_url']);
    
    $products = $_SESSION['products'];


}

?>