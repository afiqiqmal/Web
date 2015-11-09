<?php
    class Sales extends Receipt{
        private $_db,
                $sale_item,
                $sales_id,
                $user_id,
                $cust_id;
        
        public function __construct(){
            $this->db = DB::getInstance();
        }
        
        public function service_tax(){
            return 0.07;
        }
        
        public function government_tax(){
            return 0.06;
        }
        
        public function validateitem($validate,$value,$id){
            
            if($validate == 'qty'){
                $get = $this->db->get('tbl_goods_stock',array('goods_id','=',$id));
                $min = $get->result()->goods_qty - $value;
                
                if($min<0){
                    return false;
                }
                else
                    return true;
            }
            else
            if($validate == 'discount'){
                if($value>100 || $value <0){
                    return false;
                }
                else
                    return true;
            }
        }
        
        
        public function emptycart(){
           	Session::delete('products');
            Session::delete('add-pay');
        }
        
        public function add_item($item_id){
            $product_code 	= $item_id;
        	$qty = 1;
        	$results = $this->db->query("Select * from tbl_goods a,tbl_goods_stock b 
                                                    where a.goods_id = b.goods_id and
                                                    b.goods_qty > 0 and
                                                    a.goods_id =? LIMIT 1",array($product_code));
        	$obj = $results->result();
            
        	if ($results && $results->count() >0) {
        		                                    
                $new_product = array(array('goods_id'=>$obj->goods_id,
                                            'goods_name'=>$obj->goods_name,
                                            'goods_qty'=>$qty,
                                            'goods_price'=>$obj->goods_price_per_unit,
                                            'goods_discount'=>$obj->goods_discount));
        		
        		$product = array();
                if(Session::exists('products')) //if we have the session
        		{
        			$found = false; //set found item to false
        			
        			foreach (Session::get('products') as $cart_itm) //loop through session array
        			{
        				if($cart_itm["goods_id"] == $product_code){ //the item exist in array
        					$cart_itm["goods_qty"] += $qty;
        					$qty = $cart_itm["goods_qty"]; 
        					$product[] = array('goods_id'=>$cart_itm['goods_id'],
                                            'goods_name'=>$cart_itm['goods_name'],
                                            'goods_qty'=>$qty,
                                            'goods_price'=>$cart_itm['goods_price'],
                                            'goods_discount'=>$cart_itm['goods_discount']);
        					$found = true;
        				}else{
        					$product[] = array('goods_id'=>$cart_itm['goods_id'],
                                            'goods_name'=>$cart_itm['goods_name'],
                                            'goods_qty'=>$cart_itm['goods_qty'],
                                            'goods_price'=>$cart_itm['goods_price'],
                                            'goods_discount'=>$cart_itm['goods_discount']);
        				}
        			}
        			
        			if($found == false)
        			{
        				Session::put('products',array_merge($product, $new_product));
        			}else{
        				Session::put('products',$product);
        			}
        			
        		}else{
        			Session::put('products',$new_product);
        		}
        		
        	}
        }
        
        public function update_item($item_id,$update_qty,$update_dis){
            $product_code = $item_id;
            $qty = $update_qty;
            $discount = ($update_dis>100 || $update_dis<0)? 0 : $update_dis;
            $product = array();

            if(Session::exists('products')){
                $found = false;
                foreach (Session::get('products') as $cart_itm) //loop through session array
        		{
      				if($cart_itm["goods_id"] == $product_code){ //the item exist in array
        			$product[] = array('goods_id'=>$cart_itm['goods_id'],
                                            'goods_name'=>$cart_itm['goods_name'],
                                            'goods_qty'=>$qty,
                                            'goods_price'=>$cart_itm['goods_price'],
                                            'goods_discount'=>$discount);
        			$found = true;
        			}else{
        				//item doesn't exist in the list
        			     $product[] = array('goods_id'=>$cart_itm['goods_id'],
                                            'goods_name'=>$cart_itm['goods_name'],
                                            'goods_qty'=>$cart_itm['goods_qty'],
                                            'goods_price'=>$cart_itm['goods_price'],
                                            'goods_discount'=>$cart_itm['goods_discount']);
        			}
        		}
                    
                if($found == true)
        		{
        		  Session::put('products',$product);
        	   	}
            }
        }
        
        public function discountall($discount){
            if(Session::exists('products') && Session::get('products')!=null){
                    $found = false;
                    foreach (Session::get('products') as $cart_itm) //loop through session array
        			{
        					$product[] = array('goods_id'=>$cart_itm['goods_id'],
                                            'goods_name'=>$cart_itm['goods_name'],
                                            'goods_qty'=>$cart_itm['goods_qty'],
                                            'goods_price'=>$cart_itm['goods_price'],
                                            'goods_discount'=>$discount);
        				
        			}
                    
                    Session::put('products',$product);
            }
            else
                Session::put('sales_error','Cant set global discount since table is empty');
        }
        
        //payment of sale
        public function payment($paytype,$amount=0){
            $new_pay = array(array(
                'type' => $paytype,
                'amount'=> $amount
            ));
            
            $pay = array();
            if(Session::exists('add-pay')){
                $found = false;
                foreach(Session::get('add-pay') as $payment){
                    if($payment['type'] === $paytype){
                        $payment['amount'] += $amount;
                        $new_amount = $payment['amount'];
                        $pay[] = array('type' => $payment['type'],'amount'=> $new_amount);
                        $found = true;
                    }else{
                        $pay[] = array('type' => $payment['type'],'amount'=> $payment['amount'] );
                    }
                }
                
                if($found == false){
                    Session::put('add-pay',array_merge($pay,$new_pay));
                }else{
                    Session::put('add-pay',$pay);
                }
            }else{
                    Session::put('add-pay',$new_pay);   
            }
        }
        
        //select custoemr
        public function select_cust($customer){
            $select = DB::getInstance()->get('tbl_cust',array('cust_id','=',Crytion::decryt64($customer)));
            if($select && $select->count() > 0){
                Session::put('select_cust',$select->result()->cust_id);
            }
        }
        
        //remove customer choose
        public function detach_customer(){
            Session::delete('select_cust');
        }
        
        //delete all session sales
        public function cancel_sale(){
            Session::delete('select_cust');
            Session::delete('products');
            Session::delete('add-pay');
        }
        
        //remove item
        public function remove_item($type,$removeid){
            if($type == 'product')
            {
                $product = array();
            	foreach (Session::get('products') as $cart_itm) //loop through session array var
            	{
            		if($cart_itm["goods_id"]!=$removeid){ //item does,t exist in the list
            			$product[] = array('goods_id'=>$cart_itm['goods_id'],
                                                'goods_name'=>$cart_itm['goods_name'],
                                                'goods_qty'=>$cart_itm['goods_qty'],
                                                'goods_price'=>$cart_itm['goods_price'],
                                                'goods_discount'=>$cart_itm['goods_discount']);
            		}
            		Session::put('products',$product);
            	}
                
                empty($product)? Session::delete('add-pay') :"";
             }
             else
             if($type == 'payment'){
                $pay = array();
            	foreach (Session::get('add-pay') as $payment) //loop through session array var
            	{
            		if($payment["type"]!=$removeid){ //item does,t exist in the list
            			$pay[] = array('type'=>$payment['type'],'amount'=>$payment['amount']);
            		}
            	}
                
                empty($pay)? Session::delete('add-pay') :Session::put('add-pay',$pay);
             }
        }
        
        public function provideIDSale(){
            $id = "";
            $get = DB::getInstance()->query("Select sales_id from tbl_sales Order by sales_id desc limit 1");
            if(!$get->error()){
                if($get->count() == 0){
                    return "SPOS0000000001";
                }
                else{
                    $num = (substr($get->result()->sales_id,4))+1;
				    $id=str_pad($num, 10, '0', STR_PAD_LEFT);
                    return "SPOS".$id;
                }
            }
        }
        
        public function completesales($cust_id="null",$emp_id,$email="null"){
            $id = $this->provideIDSale();
            
            $error="";
            $date = date('Y-m-d H-m-s');
            $sales1 = DB::getInstance()->insert('tbl_sales',array(
                'sale_time' => $date,
                'sales_id' => $id,
                'user_id' => $emp_id,
                'cust_id' => $cust_id
            ));
            
            if(!$sales1){ $error = "stage 1 insert problem";}
            else{
                foreach(Session::get('products') as $cart){
                    $array[] = DB::getInstance()->insert('tbl_sales_item',array(
                        'sales_id' => $id,
                        'goods_id' => $cart['goods_id'],
                        'goods_qty' => $cart['goods_qty'],
                        'unit_price' => $cart['goods_price'],
                        'goods_discount' => $cart['goods_discount']
                    ));
                    
                    $get = DB::getInstance()->get('tbl_goods_stock',array('goods_id','=',$cart['goods_id']));
                    $array[] = DB::getInstance()->update('tbl_goods_stock','goods_id',$cart['goods_id'],array('goods_qty'=>($get->result()->goods_qty-$cart['goods_qty'])));
                }
                if(in_array($array,array("false"))){ $error = "stage 2 insert problem";}
                else{
                    foreach(Session::get('add-pay') as $payment){
                        $array[] = DB::getInstance()->insert('tbl_sales_payment',array(
                            'sales_id' => $id,
                            'payment_type' => $payment['type'],
                            'payment_amount' => $payment['amount'],
                            'payment_date' => $date
                        ));
                    }
                    
                    if(in_array($array,array("false"))){ $error = "stage 3 insert problem";}
                    else{
                        Session::put('receipt-em',$emp_id);
                        if($cust_id != "null"){
                            Session::put('receipt-cust',$cust_id);
                        }
                        Session::put('receipt-sales',$id);
                        $this->provideID();
                        $this->insertTableReceipt();
                        if($email == "yes")
                            $this->sendmail();
                    }
                }
            }
            
            
             
            
        }      
    }
?>