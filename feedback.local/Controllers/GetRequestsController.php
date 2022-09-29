<?php
require_once "..\Models\GetRequestsFromDB.php";
class GetRequestsController
{
    static function getRequests(){
        $pdo=GetRequestsFromDB::getRequestsFromDB();
        $requests=[];
        while($request=$pdo->fetch(PDO::FETCH_ASSOC)){
            array_push($requests,$request);
        }
        return $requests;
    }
}