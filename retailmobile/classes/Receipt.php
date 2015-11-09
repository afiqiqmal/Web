<?php
    class Receipt{
        
        private $db,
                $drawinfo = array(),
                $id,
                $receipt_id,
                $cust_id,
                $sale_id,
                $user_id,
                $date_print,
                $image;
        
        public function __construct(){
            $this->db = DB::getInstance();
        }
        
        public function drawReceipt(){
            
        }
        
        public function drawBody(){
            
        }
        
        public function drawheader(){
            echo '<div class="title">';
            echo '<table class="">';
            echo '<tr>';
            echo '<td>'.$this->getCompanyName().'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>'.$this->getAddress().'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>'.$this->getPhoneNumber().'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>'.date('d-m-Y H:i:s').'</td>';
            echo '</tr>';
            echo '</table>';
            echo '</div>';
        }
        
        public function getdata(){
            return $this->db->query('Select * from tbl_company');
        }
        
        public function getCompanyName(){
            return $name = $this->getdata()->result()->company_name;
        }
        public function getAddress(){
            return $name = $this->getdata()->result()->company_address;
        }
        public function getPhoneNumber(){
            return $name = $this->getdata()->result()->phonenumber;
        }
        public function getComEmail(){
            return $name = $this->getdata()->result()->company_email;
        }
        
        public function provideID(){
            $id = "";
            $get = DB::getInstance()->query("Select receipt_id from tbl_receipt Order by receipt_id desc limit 1");
            if(!$get->error()){
                if($get->count() == 0){
                    $this->id = "RPOS0000000001";
                    Session::put('receipt-id',$this->id);                    
                }
                else{
                    $num = (substr($get->result()->receipt_id,4))+1;
				    $id=str_pad($num, 10, '0', STR_PAD_LEFT);
                    $this->id = "RPOS".$id;
                    Session::put('receipt-id',$this->id);                    
                }
            }
        }
        
        
        public function sendmail(){   
        }
                   
                
        public function insertTableReceipt(){
            DB::getInstance()->insert('tbl_receipt',array(
                'receipt_id' => $this->id,
                'cust_id' => Session::get('receipt-cust'),
                'sale_id' => Session::get('receipt-sales'),
                'user_id' => Session::get('receipt-em'),
                'date_print' =>date('Y-m-d H-m-s')
            ));
        }
    }
    
    
?>