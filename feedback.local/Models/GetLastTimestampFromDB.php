<?php
require_once "..\ConnectionToDB.php";

class GetLastTimestampFromDB
{
    static function GetLastTimestampFromDB($userName)
    {
        $pdo = ConnectionToDB::connectToDB();
        $stmt = $pdo->prepare("SELECT MAX(timestamps) FROM requests WHERE user_names=:userName");
        $stmt->execute(array(':userName' => $userName));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}