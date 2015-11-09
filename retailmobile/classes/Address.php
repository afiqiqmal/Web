<?php

    class Address extends User{
        private $errors=array(),$valid=false,$passed=false;
        private $add_street,
                $add_city,
                $add_state,
                $add_postcode,
                $country_id;
        
        public function addAddress($field=array()){
            $this->valid = $this->create('tbl_add',$field);
            if($this->valid==false)
                $this->addError('Address Problem');
        }
        
        public function setAddress($id,$field=array()){
            $this->valid = $this->modify('tbl_add','person_id',$id,$field);
            if($this->valid==false)
                $this->addError('Updating Address Problem');
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