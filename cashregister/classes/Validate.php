<?php

    class Validate{
        private $passed = false,
                $errors = array(),
                $db = null;
        
        public function __construct(){
            $this->db = DB::getInstance();
        }
        
        public function check($source, $item=array()){
            foreach($item as $itm => $rules){
                foreach($rules as $rule => $rule_values){
                    $value =trim($source[$itm]);
                    $itm = escape($itm);
                    if($rule === 'name'){
                        $name = $rule_values;
                    }
                    if($rule === 'required' && empty($value)){
                        $this->addError("{$name} is required");
                    }
                    else if(!empty($value)){
                        switch($rule){
                            case 'min':
                                if(strlen($value)< $rule_values){
                                    $this->addError("{$name} must be minimum of {$rule_values} characters");
                                }
                            break;
                            case 'max':
                                if(strlen($value)> $rule_values){
                                    $this->addError("{$name} must be maximum of {$rule_values} characters");
                                }
                            break;
                            case 'matches':
                                if($value!=$source[$rule_values]){
                                    $this->addError("{$rule_values} must match {$name}");
                                }
                            break;
                            case 'unique':
                                $check =$this->db->get($rule_values,array($itm,'=',$value));
                                if($check->count()){
                                    $this->addError("{$name} already exist");
                                }
                            break;
                            case 'samepassword':
                                $check = $this->db->get($rule_values,array(substr($itm,1),'=',Crytion::generatehash($value)));
                                if(!$check->count()){
                                    $this->addError("Wrong entered {$name}");
                                }
                            break;
                            case 'number':
                                if(!is_numeric($value)){
                                    $this->addError("{$name} must be numeric number");
                                }
                            break;
                            case 'email':
                                if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                                    $this->addError("{$name} must be valid");
                                }
                            break;
                        }
                    }
                }
            }
            
            if(empty($this->errors)){
                $this->passed = true;
            }
            
            return $this;
        }
        
        public function addError($error){
            $this->errors[] = $error;
        }
        
        public function errors(){
            return $this->errors;
        }
        
        public function passed(){
            return $this->passed;
        }
    }

?>