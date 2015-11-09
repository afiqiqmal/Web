<?php

    class Redirect{
        
        public static function to($location= null){
            if($location){
                if(is_numeric($location))
                {
                    switch($location){
                        case '404':
                            include('../include/error/404.php');
                        break;
                    }
                }
                else
                    header('Location: '.$location);
            }
        }
        
    }

?>