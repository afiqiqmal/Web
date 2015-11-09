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
                if($usertype == 'employee')
                {   
                    $data = $this->_db->get('tbl_employee',array('user_id',"=",$user));
                    if($data->count()){
                        $this->_data = $data->result();
                        return true;
                    } 
                }
                else if($usertype == 'customer'){
                    $field = (is_numeric($user))? 'cust_tel' : 'cust_uname';
                    $data = $this->_db->get('tbl_cust',array($field,"=",$user));
                    
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
                if($this->data()->pwd === Crytion::generatehash($password)){
                    return true;
                }
            }
            
            return false;
        }
        
        public function generateid($usertype=null){
            
            if($usertype === 'employee'){  
                do{
                    $genid= Date('Y').str_pad(Crytion::randnum(6), 6, '0', STR_PAD_LEFT);
                    $user = $this->_db->query("Select user_id from tbl_employee where user_id=?",array($genid));
                        
                    $count = $user->count();
                    
                }while($count!== 0);
                
                return $genid;
            }
            else if($usertype === 'customer'){
                $user = $this->_db->query("Select cust_id from tbl_cust Order by cust_id desc limit 1");
                if(!$user->error()){
                    if($user->count() == 0){
                        return Date('Y')."0000000001";
                    }
                    else{
                        $num = (substr($user->result()->cust_id,4))+1;
					    $genid=str_pad($num, 10, '0', STR_PAD_LEFT);
                        return Date('Y').$genid;
                    }
                }
            }
            else if($usertype==='supplier'){
                $supplier = $this->_db->query("Select supplier_id from tbl_supplier Order by supplier_id desc limit 1");
                if(!$user->error()){
                    if($user->count() == 0){
                        return "S01";
                    }
                    else{
                        $num = (substr($user->result()->cust_id,1))+1;
					    $genid=str_pad($num, 2, '0', STR_PAD_RIGHT);
                        return "S".$genid;
                    }
                }
            }
            
            return false;
        }
        
        public function data(){
            return $this->_data;
        }
        
        public function isLoggedin(){
            return $this->_isLoggedin;
        }
        
    }

?>