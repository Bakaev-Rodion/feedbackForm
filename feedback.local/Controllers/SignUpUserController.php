<?php
require_once "..\Models\AddUserToDB.php";
require_once "..\Models\CheckUserNameInDB.php";

class SignUpUserController
{
    static public function signUpUser($name,$email,$password){
        if(CheckUserNameInDB::CheckUserNameInDB($name)!=$name) {
            AddUserToDB::addUserToDB($name, $email, md5($password));
            header("Location:login.php");
        }
        else {
            header("Location:signup.php?fail=true");
        }
    }
}