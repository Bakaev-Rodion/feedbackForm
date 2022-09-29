<?php
require_once "..\ConnectionToDB.php";

class AddUserToDB
{
    static function addUserToDB($userName,$email,$password){
        $pdo=ConnectionToDB::connectToDB();
        $stmt= $pdo->prepare('INSERT INTO users(user_names,email,passwords) VALUES (:userName, :email, :password)');
        $stmt->execute(array(':userName'=>$userName,':email'=>$email,':password'=>$password));
    }
}