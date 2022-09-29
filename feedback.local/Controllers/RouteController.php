<?php


class RouteController
{
    static function routeForm(){
        header("Location:\Views\\form.php");
    }
    static function routeSignup(){
        header("Location:\Views\signup.php");
    }
    static function routeList(){
        header('Location: \Views\list.php');
    }
    static function routeLogin(){
        header("Location: login.php?fail=true");
    }
}