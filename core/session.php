<?php 

class CNLSession 
{
    public $session = null;
    public function __construct(){}

    public function setSession($key,$value){
        $_SESSION[$key] = $value;
      // $this->session[$key] = $value;
    }
    public function getSession($key){

        return $_SESSION[$key];
    }

    public function isEmpty(){
        return empty($_SESSION);
    }
    
}




?>