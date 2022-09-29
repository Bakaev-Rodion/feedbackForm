<?php
require_once "..\Models\GetLastTimestampFromDB.php";

class GetLastTimestampController
{
    static function GetLastTimestamp($userName){
        return GetLastTimestampFromDB::getLastTimestampFromDB($userName);
}
}