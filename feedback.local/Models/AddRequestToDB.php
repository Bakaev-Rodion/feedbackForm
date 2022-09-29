<?php
require_once "..\ConnectionToDB.php";
class AddRequestToDB
{
    static function addRequestToDB($topic,$message,$userName,$email,$filePath,$timestamp){
        $pdo=ConnectionToDB::connectToDB();
        $stmt= $pdo->prepare('INSERT INTO requests(topics,massages,user_names,user_emails,file_links,timestamps,seen) 
                                VALUES (:topic,:message,:user_name,:user_email,:file_link,:timestamp,0)');
        $stmt->execute(array(':topic'=>$topic,':message'=>$message,':user_name'=>$userName,':user_email'=>$email,':file_link'=>$filePath,':timestamp'=>$timestamp));
    }
}