<?php
  session_start();

  $GLOBALS[ 'config']=array(
      'mysql'=> array(
          'host' => '127.0.0.1',
          'username' => 'root',
          'password' => '',
          'db' => 'fp_db'
      ),
      'remember' =>array(
          'cookie_name' => 'hash',
          'cookie_expiry' => 604800
      ),
      'sessions' =>array(
          'session_name' => 'admin',
          'token_name' => 'token'
      )
  );

  spl_autoload_register(function($class){
      require_once $_SERVER['DOCUMENT_ROOT'].'/blackpearl/control/classes/'.$class.'.php';
  });

  date_default_timezone_set('Asia/Kuala_Lumpur');

  require_once $_SERVER['DOCUMENT_ROOT'].'/blackpearl/control/functions/sanitize.php'; ?>


  
