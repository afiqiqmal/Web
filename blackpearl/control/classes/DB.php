<?php

    class DB{
        private static $_instance = null;
        
        private $pdo,
                $query,
                $error = false,
                $result,
                $count =0;
                
        private function __construct(){
            try{
                $this->pdo = new PDO('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/db'),Config::get('mysql/username'),Config::get('mysql/password'));
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }
        
        public static function getInstance(){
            if(!isset(self::$_instance)){
                self::$_instance = new DB();
            }
            return self::$_instance;
        }
        
        //global function query
        public function query($sql,$param = array()){
            $this->error = false;
            if($this->query = $this->pdo->prepare($sql)){
                $x=1;
                if(count($param)){
                    foreach($param as $prm){
                        $this->query->bindValue($x,$prm);
                        $x++;
                    }
                }
                if($this->query->execute()){
                    $this->result = $this->query->fetchAll(PDO::FETCH_OBJ);
                    $this->count = $this->query->rowCount();    
                }
                else{
                    $this->error = true;
                    echo $this->query->errorInfo()[2]; //show specific error
                }                 
            }           
            return $this;
        }
        
        public function getAll($table){
        }
        
        //function operator sql delete and select function
        public function action($action, $table, $where = array()){
            if(count($where)===3){
                $operators = array("=","<",">","<=",">=");
                
                $field = $where[0];
                $operator = $where[1];
                $value = $where[2];
                
                if(in_array($operator,$operators)){
                    $sql = "{$action} from {$table} where {$field} {$operator} ?";
                    
                    if(!$this->query($sql,array($value))->error()){
                        return $this;
                    }
                }
            } 
            return false;
        }
        
        //select function
        public function get($table, $where= array()){
            return $this->action('Select *',$table,$where);
        }
        
        //delete function
        public function delete($table, $where= array()){
            return $this->action('Delete',$table,$where);
        }
        
        //insert function
        public function insert($table, $field= array()){
            if(count($field)){
                $keys = array_keys($field);
                $values = '';
                $x=1;
                
                foreach($field as $fld){
                    $values .= '?';
                    //to prevent extra comma
                    if($x<count($field))
                    {
                        $values .=', ';
                    }
                    $x++;
                }
                               
                $sql="insert into {$table} (".implode(',',$keys).") values ({$values})";
                
                if(!$this->query($sql,$field)->error()){
                    return true;
                }
            }
            
            return false;
        }
        
        //update function
        public function update($table,$id,$idvalue,$field=array()){
            $set='';
            $x=1;
            
            foreach($field as $name =>$value){
                $set .= "{$name} = ?";
                if($x<count($field)){
                    $set .=',';
                }
                
                $x++;
            }
                 
            $sql="update {$table} set {$set} where {$id}= {$idvalue}";
            
            if(!$this->query($sql,$field)->error()){
                    return true;
            }
            
            return false;
            
        }
        
        public function result(){
            return $this->result;
        }
            
        public function error(){
            return $this->error;
        }
        
        public function count(){
            return $this->count;
        }
    }
?>