<?php
    class Sales{
        private $_db,
                $curr_total,
                $sub_price,
                $tax =0.1;
        
        public function __construct(){
            $this->db = DB::getInstance();
        }
        public function add_item($code){
            $product_code 	= $code;
        	$qty = 1;
        	$results = $this->db->query("Select * from food_tbl where food_id =?",array($product_code));
        	$obj = $results->result();
        	if ($results && $results->count() >0) {
        		                                    
                $new_product = array(array('item_id'=>$obj[0]->food_id,
                                            'item_name'=>$obj[0]->food_name,
                                            'item_qty'=>$qty,
                                            'item_price'=>$obj[0]->food_price,
                                            'item_total'=>($obj[0]->food_price)*$qty));
        		
        		$product = array();
                if(Session::exists('products')) //if we have the session
        		{
        			$found = false; //set found item to false
        			
        			foreach (Session::get('products') as $cart_itm) //loop through session array
        			{
        				if($cart_itm["item_id"] == $product_code){ //the item exist in array
        					$cart_itm["item_qty"] += $qty;
        					$qty = $cart_itm["item_qty"]; 
        					$product[] = array('item_id'=>$cart_itm['item_id'],
                                            'item_name'=>$cart_itm['item_name'],
                                            'item_qty'=>$qty,
                                            'item_price'=>$cart_itm['item_price'],
                                            'item_total'=>$cart_itm['item_total']*$qty);
        					$found = true;
        				}else{
        					$product[] = array('item_id'=>$cart_itm['item_id'],
                                            'item_name'=>$cart_itm['item_name'],
                                            'item_qty'=>$cart_itm['item_qty'],
                                            'item_price'=>$cart_itm['item_price'],
                                            'item_total'=>$cart_itm['item_total']);
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
        
        public function update_item($code,$update_qty){
            $product_code = $code;
            $qty = $update_qty;
            $product = array();

            if(Session::exists('products')){
                $found = false;
                foreach (Session::get('products') as $cart_itm) //loop through session array
        		{
      				if($cart_itm["item_id"] == $product_code){ //the item exist in array
        			$product[] = array('item_id'=>$cart_itm['item_id'],
                                            'item_name'=>$cart_itm['item_name'],
                                            'item_qty'=>$qty,
                                            'item_price'=>$cart_itm['item_price'],
                                            'item_total'=>$cart_itm['item_price']*$qty);
        			$found = true;
        			}else{
        				//item doesn't exist in the list
        			     $product[] = array('item_id'=>$cart_itm['item_id'],
                                            'item_name'=>$cart_itm['item_name'],
                                            'item_qty'=>$cart_itm['item_qty'],
                                            'item_price'=>$cart_itm['item_price'],
                                            'item_total'=>$cart_itm['item_total']);
        			}
        		}
                    
                if($found == true)
        		{
        		  Session::put('products',$product);
        	   	}
            }
        }
            
        //remove item
        public function remove_item($type,$removeid){
            if($type == 'item')
            {
                $product = array();
            	foreach (Session::get('products') as $cart_itm) //loop through session array var
            	{
            		if($cart_itm["item_id"]!=$removeid){ //item does,t exist in the list
            			$product[] = array('item_id'=>$cart_itm['item_id'],
                                                'item_name'=>$cart_itm['item_name'],
                                                'item_qty'=>$cart_itm['item_qty'],
                                                'item_price'=>$cart_itm['item_price'],
                                                'item_total'=>$cart_itm['item_total']);
            		}
            		Session::put('products',$product);
            	}
             }
        }

        public function validatePurchase($current_pay,$id){
            $current_Date = date('d m Y');

            $sql = "Select total FROM food_tbl a,history_tbl b,purchase_tbl c
                                        WHERE a.food_id = c.food_id
                                        AND b.stud_id = c.stud_id
                                        AND b.purchase_id = c.purchase_id
                                        AND b.date = c.date
                                        AND c.stud_id = ?
                                        AND b.date = ?";

            $results = $this->db->query($sql,array($id,$current_Date));
            $obj = $results->result();
            
            if ($results && $results->count() >0){
                if($sum + $current_pay > 10){
                    return false;
                }
            }
            else{
                if($current_pay > 10){
                    return false;
                }
            }

            return true;
        }

        public function calc_total(){
            $total = Sales::sub_price() + Sales::sub_tax();
            return number_format((float)$total, 2, '.', '');
        }

        public function sub_price(){
            $sum=0;
            foreach (Session::get('products') as $cart_itm) {
                $sum += $cart_itm['item_total'];
            }
            return number_format((float)$sum, 2, '.', '');
        }

        public function sub_tax(){
            return number_format((float)(Sales::sub_price()*Sales::get_tax()), 2, '.', '');
        }

        public function get_tax(){
            return $tax = 0.1;
        }

        public function remove_stud(){
            Session::delete('select_stud');
        }   

        //delete all session sales
        public function cancel_sale(){
            Session::delete('select_stud');
            Session::delete('products');
            Session::delete('pay-cart');
        }
         
        public function emptycart(){
            Session::delete('products');
            Session::delete('pay-cart');
        }

        public function payment(){
            
        }
    }
             
?>