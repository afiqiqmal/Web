<?php

    class Supplier extends User{
        private $errors=array(),$valid=false,$passed=false;
        private $supplier_id,
                $supplier_name,
                $supplier_tel,
                $add_street,
                $add_city,
                $add_state,
                $add_postcode,
                $country_id,
                $date_reg;
        
        public function addSupplier($field=array()){
            $this->valid = $this->create('tbl_supplier',$field);
            if($this->valid==false)
                $this->addError('Details Problem');
        }
        
        public function updateSupp($id,$field=array()){
            $this->valid = $this->modify('tbl_supplier','supplier_id',$id,$field);
            if($this->valid==false)
                $this->addError('Updating Details Problem');
        }
        
        public function deleteSupplier($id){
            $this->valid = $this->remove('tbl_supplier',array('supplier_id','=',$id));
            if($this->valid==false)
                $this->addError('Deleting Problem');
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