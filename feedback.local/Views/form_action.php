<?php
require_once "..\autoload.php";
session_start();
if(isset($_POST['topic'])&&isset($_POST['message'])&&isset($_SESSION['userName'])&&isset($_SESSION['email']))
{
    $_SESSION['failedToAdd']=false;
    $timestamp=time();
    if($timestamp-GetLastTimestampController::GetLastTimestamp($_SESSION['userName'])['MAX(timestamps)']>86400) {
        $userFile = FileUploadController::uploadFile($_FILES, $_SESSION['userName'], $timestamp, $_POST['topic']);
        AddRequestController::addRequest($_POST['topic'], $_POST['message'], $_SESSION['userName'], $_SESSION['email'], $userFile, $timestamp);
        SendEmailController::sendEmail($_POST['topic'], $_POST['message'], $_SESSION['userName'], $_SESSION['email'], $timestamp);
        RouteController::routeForm();
    }
    else {
        $_SESSION['failedToAdd']=true;
        RouteController::routeForm();
    }
}
else RouteController::routeForm();// header("location:form.php");