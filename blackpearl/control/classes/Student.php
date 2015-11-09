<?php

	class Student extends User
	{
		private $passed = false,
                $errors = array(),
                $db = null,
                $image = false,
                $imagetype= false,
                $imagename= false;

        public function registerStud($detail=array(),$class=array(),$parent=array()){
        	$results = $this->create('student_tbl',$detail);
        	if(!$results)
                $this->addError('createing into table student problem occur');
        	$results = $this->create('class_tbl',$class);
        	if(!$results)
                $this->addError('Inserting into table class problem occur');
        	$results = $this->create('parent_tbl',$parent);
            if(!$results)
                $this->addError('Inserting into table parent problem occur');

            $this->check();
        }

        public function updateStud(){

        }

        public function getID($who,$getgrade){
        	return $this->generateID($who,$getgrade);
        }

        public function verifyImg($value,$id){
            $allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES[$value]["name"]);
			$extension = end($temp);

            if(in_array($extension, $allowedExts) && $_FILES[$value]["error"] == 0){
				$name = $id.'.'.$extension;
                $newpath = $_SERVER['DOCUMENT_ROOT']."/blackpearl/img/profile-pics/student/" . $name;
                
                move_uploaded_file($_FILES[$value]["tmp_name"],$newpath);
                
                $this->image=base64_encode(file_get_contents($newpath));
                $this->imagename=$name;
            }
            else{
                $this->image = base64_encode(file_get_contents($_SERVER['DOCUMENT_ROOT']."/blackpearl/img/profile-pics/avatar.png"));
                $this->imagename = "avatar.png";
            }
        }

        public function getimage(){
            return $this->image;
        }
        
        public function getimagename(){
            return $this->imagename;
        }
        
        public function passed(){
            return $this->passed;
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
	}
	

?>