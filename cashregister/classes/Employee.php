<?php

    class Employee extends User{
        private $errors=array(),$valid=false,$passed=false,$setfield=array();
        private $user_id,
                $fname,
                $lname,
                $email,
                $tel,
                $icnumber,
                $dob,
                $gender,
                $pwd,
                $notes,
                $salary,
                $date_reg,
                $date_update,
                $job_id,
                $image,
                $image_type,
                $image_name;

        public function addEmployee($field=array()){
            $this->valid = $this->create('tbl_employee',$field);
            if($this->valid==false)
                $this->addError('Details Problem');
        }
        
        public function updateEm($id,$field=array()){
            $this->valid = $this->modify('tbl_employee','user_id',$id,$field);
            if($this->valid==false)
                $this->addError('Updating Details Problem');
        }
        
        public function deleteEmployee($id){
            $this->valid = $this->remove('tbl_employee',array('user_id','=',$id));
            $this->valid = $this->remove('tbl_add',array('person_id','=',$id));
            if($this->valid==false)
                $this->addError('Deleting Problem');
        }
        
        public function updatepass($id,$value){
            $user = DB::getInstance()->get('tbl_employee',array("user_id","=",$id));
            $pwd = $user->result()->pwd;
            
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
            return $this->passed;
        }
        
        /*
        public function setEmployee($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q){
            $this->user_id = $a;
            $this->fname = $b;
            $this->lname = $c;
            $this->email = $d;
            $this->tel = $e;
            $this->icnumber = $f;
            $this->dob = $g;
            $this->gender = $h;
            $this->pwd = $i;
            $this->notes = $j;
            $this->salary = $k;
            $this->date_reg = $l;
            $this->date_update = $m;
            $this->job_id = $n;
            $this->image = $o;
            $this->image_type = $p;
            $this->image_name = $q;
        }
        
        public function setArray(){
            $this->setfield = array(
                'user_id' => $this->user_id,
                'fname' => $this->fname,
                'lname' => $this->lname,
                'icnumber' => $this->icnumber,
                'dob' => $this->dob,
                'image' => $this->image,
                'image_name' => $this->image_name,
                'image_type' => $this->image_type,
                'email' => $this->email,
                'tel' => $this->tel,
                'gender' => $this->gender,
                'pwd' => $this->pwd,
                'notes' => $this->notes,
                'salary' => $this->salary,
                'date_reg' => $this->date_reg,
                'job_id' => $this->job_id
            );
        }
        */
    }
    
?>