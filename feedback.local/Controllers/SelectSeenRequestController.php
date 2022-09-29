<?php
require_once "..\Models\SelectSeenRequestInDB.php";
class SelectSeenRequestController
{
    static function selectSeenRequest($id){
        SelectSeenRequestInDB::selectSeenRequestInDB($id);
    }
}