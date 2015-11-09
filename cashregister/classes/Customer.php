<?php

    class Customer extends User{
        private $errors=array(),$valid=false,$passed=false;
        private $cust_id,
                $cust_fname,
                $cust_lname,
                $cust_tel,
                $cust_email,
                $cust_pass,
                $cust_uname,
                $cust_dob,
                $cust_gender,
                $date_reg,
                $date_update,
                $image,
                $image_type,
                $image_name;
        
        public function addCustomer($field=array()){
            $this->valid = $this->create('tbl_cust',$field);
            if($this->valid==false)
                $this->addError('Details Problem');
        }
        
        public function updatecust($id,$field=array()){
            $this->valid = $this->modify('tbl_cust','cust_id',$id,$field);
            if($this->valid==false)
                $this->addError('Updating Details Problem');
        }
        
        public function deletecustomer($id){
            $this->valid = $this->remove('tbl_cust',array('cust_id','=',$id));
            $this->valid = $this->remove('tbl_add',array('person_id','=',$id));
            if($this->valid==false)
                $this->addError('Deleting Problem');
        }
        
        public function updatepass($id,$value){
            $user = DB::getInstance()->get('tbl_cust',array("cust_id","=",$id));
            $pwd = $user->result()->cust_pass;
            
            if(Input::get($value)!=null && Crytion::generatehash(Input::get($value)!=$pwd))
                return $pwd = Crytion::generatehash(input::get($value));
            return $pwd;
        }
        
        public function provideID($type){
            return $this->generateid($type);
        }
        
        public function check(){
            if(empty($this->errors)){
                $this->passed = true;
            }
        }
        
        public function addError($error){
            $this->errors[] = $error;
        }
        
        public function errors(){
            return $this->errors;
        }
        
        public function valid(){
            return $this->valid;
        }
        
        public function passed(){
            $this->check();
            if($this->passed==true){
                Session::put('form-success','Success!');
            }
            else
            {
                Session::put('form-error',$this->errors());
            }
        }
    }
?>