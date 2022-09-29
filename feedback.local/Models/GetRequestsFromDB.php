<?php
require_once "..\ConnectionToDB.php";

class GetRequestsFromDB
{
    static function getRequestsFromDB(){
        $pdo=ConnectionToDB::connectToDB();
        $stmt= $pdo->query('SELECT * FROM requests ORDER BY seen ASC');
        return $stmt;
    }
}