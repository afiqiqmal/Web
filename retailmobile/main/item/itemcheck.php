<?php
    require 'core/init.php';
    
    $check = new Inventory();
    
    if(Input::exists() && Input::get('checkitem')){
        $valid = $check->checkinv(Input::get('checkitem'));
        
        if($valid)
            echo 1;
        else{
            echo 0;
        }
    }
?>