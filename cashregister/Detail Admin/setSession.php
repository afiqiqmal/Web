<?php
    
    require 'core/init.php';
    
    if(Input::get('set') == 'cat'){
        $return_url = Crytion::decryt64(Input::get("return_url")); 
        Session::put('no-cat','');
        Redirect::to($return_url);
    }
    else
    if(Input::get('set') == 'nocat'){
        $return_url = Crytion::decryt64(Input::get("return_url")); 
        Session::delete('no-cat','');
        Redirect::to($return_url);
    }
?>