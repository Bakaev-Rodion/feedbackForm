<?php
require_once "..\Models\SelectUserFromDB.php";
require_once "RouteController.php";
class UserLogInController
{
    static public function loginCheck($name,$password){
        $userInfo=SelectUserFromDB::selectUserFromDB($name,md5($password));
        if(!empty($userInfo)){
            session_start();
            $_SESSION['userName']=$userInfo['user_names'];
            $_SESSION['email']=$userInfo['email'];
            RouteController::routeForm();
        }
        else RouteController::routeLogin();
    }
}