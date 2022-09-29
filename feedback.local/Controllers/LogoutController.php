<?php
class LogoutController
{
    static function logout(){
        session_start();
        session_destroy();
        header("Location: \Views\login.php");
    }
}