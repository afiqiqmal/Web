<?php
    
    require 'init/core.php';
    
    if(Input::get('set') == 'cat'){
        $return_url = Crytion::decryt64(Input::get("return_url")); 
        Session::put('no-cat');
        Redirect::to($return_url);
    }
    
    if(Input::get('complete') == md5('true')){
        $return_url = Crytion::decryt64(Input::get("return_url")); 
        Session::put('complete');
        Redirect::to($return_url);
    }
?>