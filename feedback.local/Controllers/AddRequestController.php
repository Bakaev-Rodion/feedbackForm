<?php
require_once "..\Models\AddRequestToDB.php";
class AddRequestController
{
    static function addRequest($topic,$message,$userName,$email,$filePath,$timestamp){
        AddRequestToDB::addRequestToDB($topic,$message,$userName,$email,$filePath,$timestamp);
    }
}