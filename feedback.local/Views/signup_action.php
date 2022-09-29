<?php
require_once "..\autoload.php";
if (isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['password'])){
    SignUpUserController::signUpUser($_POST['userName'], $_POST['email'], $_POST['password']);
}
else RouteController::routeSignup();//header("Location:signup.php");
