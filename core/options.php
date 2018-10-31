<?php


require_once("manager.php");
require_once("db.php");
require_once("session.php");

$session = new CNLSession();

$db = new DB("127.0.0.1","test","root","");

$manager = new Manager($db,$session); 

if (isset($_POST) && !empty($_POST)) {

    $action = $_POST['action'];



    if ($action == 'login') {
        # code...
        $manager->login($_POST);
    }else{
        move_uploaded_file($_FILES["image"]['tmp_name'],'../images/'.$_FILES["image"]['name']);

        $manager->signup($_POST , $_FILES["image"]);
    }
   
}


?>