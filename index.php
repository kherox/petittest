<?php 
session_start();


if ($session->isEmpty()) {
   
 header('Location: view/loginview.php');
}else{
    header('Location: view/listingview.php');

}








?>