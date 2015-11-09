<?php

    class Inventory{
        
        private $db,
                $error = false,
                $good_id,
                $good_name,
                $good_category,
                $good_qty,
                $good_discount,
                $good_price_per_unit,
                $good_cost_price_per_unit;
        
        public function __construct(){
            $this->db = DB::getInstance();
        }
        
        public function updateqty($table,$table2,$user,$item_id,$assqty,$comment){
            $get=$this->db->get($table,array('goods_id','=',$item_id));
            $newqty='0';
            $valid=true;
            if(is_numeric(substr($assqty,1))){
                if(substr($assqty,0,1) == '+'){
                    $newqty = $get->result()->goods_qty + substr($assqty,1);}
                else if(substr($assqty,0,1) == '-'){
                    $newqty = $get->result()->goods_qty - substr($assqty,1);}
                else
                    $valid = false;
            }
            else
                $valid = false;
            
            if($valid){  
                $upd=$this->db->update($table,'goods_id',$item_id,array(
                    'goods_qty' => $newqty
                ));
                
                $upd=$this->db->insert($table2,array(
                    'goods_id' => $item_id,
                    'user_id' => $user,
                    'update_qty' => $assqty,
                    'date_update_qty' =>date('d-m-Y h:i:s'),
                    'notes_update' =>$comment
                ));
                
                if($upd)
                    return true;
            }
            
            return false;   
        }
        
        public function deleteitem($id){
            $delete = $this->db->delete('tbl_goods',array('goods_id','=',$id));
            $delete = $this->db->delete('tbl_goods_stock',array('goods_id','=',$id));
            $delete = $this->db->delete('tbl_item_update_record',array('goods_id','=',$id));
            if($delete)
                return true;
            
            return false;
        }
        
        public function addinventory($table,$items = array()){
            $get = $this->db->insert($table,$items);
            if($get)
                return true;
            
            return false;
        }
        
        public function updateinv($table,$field,$value,$items=array()){
            $upd = $this->db->update($table,$field,$value,$items);
            if($upd)
                return true;
            return false;
        }
        
        public function generateid($length = 16){
            return Crytion::generateRandomNumber($length);
        }
        
        public function checkinv($code){
            $found = $this->db->get('tbl_goods',array('goods_id','=',$code));
            if($found->count() >0)
                return true;
            else
                return false;
        }
        
        public function error(){
            return $this->error;
        }
    }


?>