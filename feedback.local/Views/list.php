<?php
require_once "..\Controllers\GetRequestsController.php";
session_start();
if(!isset($_SESSION['userName']))
    header("Location: login.php");
$requests=GetRequestsController::getRequests();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action='list_action.php' method="post">
    <?php
    foreach ($requests as $request){
        if(!$request['seen']) {
            echo "
        <input type='checkbox' name='request_" . $request['id'] . "'>
             <label for='request_" . $request['id'] . "'>" . $request['id']
                . "<br>Topic:<br>" . $request['topics']
                . "<br>Message:<br>" . $request['massages']
                . "<br>User data:<br>" . $request['user_emails'] . "<br>" . $request['user_names']
                . "<br>Date: " . date('d-m-Y', $request['timestamps'])
                . "<br>File: <a href='\\folder\\".$request['file_links']."'download>".$request['file_links']."</a><br>
             </label>";
        }
    }
    ?>
    <input type="submit" value="Request is seen">
</form>
<a href="logout.php">Log out</a>
</body>

