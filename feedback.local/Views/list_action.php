<?php
require_once "..\autoload.php";

foreach($_POST as $key=>$post) {
    if(preg_match("/request_/i",$key))
    SelectSeenRequestController::selectSeenRequest(substr($key,8));
    header("Location: list.php");
}