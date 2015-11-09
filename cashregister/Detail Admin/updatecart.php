<?php
require_once "core/init.php";

$inv = new Sales();

//empty cart by destroying current session
if(Input::exists('emptycart') && Input::get('emptycart')===1)
{
	$return_url = Crytion::decryt64(Input::get("return_url")); 
	$inv->emptycart();
	Redirect::to($return_url);
}

if(Input::get('check')){
    $get = DB::getInstance()->get('tbl_goods',array('goods_id','=',Input::get('check')));
    
    if($get->count() == 0)
        echo 0;
    else
        echo 1;    
}

//add item in shopping cart
if(Input::exists() && Input::get('type') == 'search')
{
	$product_code 	= Input::get('scan_item');
	$return_url = Crytion::decryt64(Input::get("return_url")); 
	$inv->add_item($product_code);
	Redirect::to($return_url);
}

//update item

if(Input::exists() && Input::get('type') == 'update'){
    $product_code = Input::get('goods_id');
    $qty = Input::get('goods_qty');
    $discount = Input::get('goods_discount');
    $return_url = Crytion::decryt64(Input::get("return_url"));
    $inv->update_item($product_code,$qty,$discount);
    Redirect::to($return_url);
}

//global discount
if(Input::exists() && Input::get('type') == 'globaldiscount' && Input::get('return_url')){
    $return_url = Crytion::decryt64(Input::get("return_url")); 
    $discount = Input::get('setglobald');
    $inv->discountall($discount);
    Redirect::to($return_url);
}

//payment
if(Input::get('pay-type')!=null && Input::get('amount') !=null){
    $return_url = Crytion::decryt64(Input::get("return_url"));
    $inv->payment(Input::get('pay-type'),Input::get('amount'));
    Redirect::to($return_url);
}

//select customer 
if(Input::get('cust_sel')!=null&& Input::get('return_url')!=null){
    $return_url = Crytion::decryt64(Input::get("return_url"));
    $inv->select_cust(Input::get('cust_sel'));
    
    Redirect::to($return_url);    
}

//detach customer
if(Input::get('detach') && Input::get('detach') == 1){
    $return_url = Crytion::decryt64(Input::get("return_url"));
    $inv->detach_customer();
    Redirect::to($return_url);
}

//cancel sales
if(Input::get('detachall')==1){
    $return_url = Crytion::decryt64(Input::get("return_url")); 
    $inv->cancel_sale();
    Redirect::to($return_url);
}

//remove item from shopping cart
if(Input::get('removep') && Input::get('return_url') && Session::exists('products'))
{
	$code 	= Input::get('removep');
	$return_url = Crytion::decryt64(Input::get("return_url")); 
    
    $inv->remove_item(Input::get('bac'),$code);
     
    Redirect::to($return_url);
}

//complete sales 
if(Input::exists() && Input::get('complete')==md5("complete") && Session::exists('products') && Session::exists('add-pay')){
    $return_url = Crytion::decryt64(Input::get("return_url")); 
    echo $emp_id = Crytion::decryt64(Session::get('user_id'));
    $email = Input::get('bool-email');
    if(Session::exists('select_cust')){
        echo $cust_id = Session::get('select_cust'); 
        echo "Send Email :".$email;
    }
    else{
        $cust_id="null";
        $email="null";
    }
    
    $inv->completesales($cust_id,$emp_id,$email);
    Redirect::to("receipt.php");   
}

//Redirect::to('sales.php');
?>