<?php
require_once "..\autoload.php";
session_start();
if($_POST['userName']=='Manager' && md5($_POST['password'])==md5('php_123')){
    $_SESSION['userName']="Manager";
    RouteController::routeList();
    //header('Location: list.php');
}
else{
    UserLogInController::loginCheck($_POST['userName'],$_POST['password']);
}