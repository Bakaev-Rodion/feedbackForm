<?php
require_once "..\ConnectionToDB.php";
class SelectSeenRequestInDB
{
    static function selectSeenRequestInDB($id){
        $pdo=ConnectionToDB::connectToDB();
        $pdo->query('UPDATE requests SET seen=1 WHERE id='.$id);
    }
}