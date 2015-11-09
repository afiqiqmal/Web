<?php

    class Image {
        private $passed = false,
                $errors = array(),
                $db = null,
                $image = false,
                $imagetype= false,
                $imagename= false;
        
        public function checkimage($value,$status,$table="",$field=array()){
            if($status == 'insert'){
                if($_FILES[$value]["error"]>0){
                    $image = file_get_contents("../images/avatar.png");
                    $imagetype = "image/png";
                    $imagename = "avatar.png";
                }
                else
                {
                    move_uploaded_file($_FILES[$value]['tmp_name'], "../images/".$_FILES[$value]['name'] );
                    $this->image=file_get_contents("../images/".$_FILES[$value]['name']);
               	    $this->imagetype=$_FILES[$value]["type"];
                   	$this->imagename=$_FILES[$value]["name"];
                }
            }
            else if($status == 'update'){
                if($_FILES[$value]["error"]>0){
                    $get = DB::getInstance()->get($table,$field);
                    $this->image = $get->result()->image;
                    $this->imagetype = $get->result()->image_type;
                    $this->imagename = $get->result()->image_name;
                }
                else
                {
                    move_uploaded_file($_FILES[$value]['tmp_name'], "../images/".$_FILES[$value]['name'] );
                    $this->image=file_get_contents("../images/".$_FILES[$value]['name']);
               	    $this->imagetype=$_FILES[$value]["type"];
                   	$this->imagename=$_FILES[$value]["name"];
                }
            }   
        }
        
        public function getimage(){
            return $this->image;
        }
        
        public function getimagetype(){
            return $this->imagename;
        }
        
        public function getimagename(){
            return $this->imagetype;
        }
        
        public function passed(){
            return $this->passed;
        }
    }


?>