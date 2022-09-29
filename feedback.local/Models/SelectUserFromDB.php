<?php
require_once "..\ConnectionToDB.php";

class SelectUserFromDB
{
    static function selectUserFromDB($userName,$password){
        $pdo=ConnectionToDB::connectToDB();
        $stmt= $pdo->prepare('SELECT * FROM users WHERE user_names=:userName AND passwords=:password');
        $stmt->execute(array(':userName'=>$userName,':password'=>$password));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}