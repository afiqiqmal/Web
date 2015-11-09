<?php

    class User{
        
        private $_db,
                $_data,
                $_isLoggedin = false;
        
        public function __construct($user=null){
            $this->_db = DB::getInstance();
        }
        
        public function checkLoggedin($users = array()){
            $count=0;
            foreach($users as $user )
            {
                if(Session::exists($user))
                    $count++;
            }
            if(count($users) == $count)
                $this->_isLoggedin = true;
        }
        
        public function create($table,$field=array()){
            if(!$this->_db->insert($table,$field)){
                return false;
            }            
            return true;
        }
        
        public function modify($table,$fieldid,$id,$field=array()){
            if(!$this->_db->update($table,$fieldid,$id,$field)){
                return false;
            }
            
            return true;
        }
        
        public function remove($table,$where=array()){
            if(!$this->_db->delete($table,$where)){
                return false;
            }
            
            return true;
        }
        
        public function find($user=null,$usertype=null){
            if($user){
                if($usertype == 'student')
                {   
                    $data = $this->_db->get('student_tbl',array('stud_id',"=",$user));
                    if($data->count()){
                        $this->_data = $data->result();
                        return true;
                    } 
                }
                else if($usertype == 'teacher'){
                    $data = $this->_db->get('teacher_tbl',array("teach_id","=",$user));
                    
                    if($data->count()){
                        $this->_data = $data->result();
                        return true;
                    }
                }
                else if($usertype == 'admin'){
                    $data = $this->_db->get('priviledge',array($field,"=",$user));
                    
                    if($data->count()){
                        $this->_data = $data->result();
                        return true;
                    }
                }
            }
            
            return false;
        }
        
        public function login($username=null,$password=null,$user_type=null){
            $user = $this->find($username,$user_type);
            if($user){
                if($user_type == 'student'){
                    if($this->data()[0]->stud_birthcert === $password )
                        return true;
                }
                else {
                    if($this->data()[0]->pwd === Crytion::generatehash($password))
                        return true;
                }
            }
            
            return false;
        }

        public function generateID($who,$getgrade){
            if($who == 'student'){
                $results = $this->_db->query('Select * from student_tbl where stud_grade = ?',array($getgrade));
                $obj = $results->result();
                if ($results && $results->count() >0) {
                    return $id = date('Y').'0'.$getgrade.str_pad($results->count() + 1, 4, "0", STR_PAD_LEFT);
                }
                else{
                    return $id = date('Y').'0'.$getgrade.str_pad(1, 4, "0", STR_PAD_LEFT);
                }
            }

            return "";
        }
        
        public function data(){
            return $this->_data;
        }
        
        public function isLoggedin(){
            return $this->_isLoggedin;
        }
        
    }

?>