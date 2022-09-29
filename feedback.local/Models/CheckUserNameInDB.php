<?php
require_once "..\ConnectionToDB.php";
class CheckUserNameInDB
{
    static function CheckUserNameInDB($userName){
        $pdo=ConnectionToDB::connectToDB();
        $stmt= $pdo->prepare('SELECT user_names FROM users WHERE user_names=:userName');
        $stmt->execute(array(':userName'=>$userName));
        return $stmt->fetch(PDO::FETCH_ASSOC)['user_names'];

    }
}