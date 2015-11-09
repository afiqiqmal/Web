<?php

    class Crytion{
          
        public static function encryt64($id){
            return base64_encode($id);
        } 
        
        public static function decryt64($id){
            return base64_decode($id);
        }
        
        public static function generatehash($pwd){
			if(defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH){
				$salt = '!@'. substr(md5(uniqid(rand(),true)), 0,22);
				return crypt($pwd,$salt);
			}
		}
        
        public static function makemd5($id){
            return md5($id);
        }
        
        public static function make($string,$salt=''){
            return hash('sha256',$string.$salt);
        }
        
        public static function salt($length){
            return mcrypt_create_iv($length);
        }
        
        public static function unique(){
            return self::make(uniqid());
        }
        
        public static function randnum($digits){
          return rand(pow(10, $digits - 1) - 1, pow(10, $digits) - 1);
        }
        
        public static function generateRandomString($length = 2) {
        	return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@"), 0, $length);
        }
        
        public static function generateRandomNumber($length = 16){
            $code="";$last=-1;
            for ($i=0;$i<$length;$i++){
                do{
                    $next_digit=mt_rand(0,9);
                }
                while ($next_digit == $last);
                $last=$next_digit;
                $code.=$next_digit;
            }
            return $code;  
        }
        
    }


?>