<?php
class ConnectionToDB
{
    static public function connectToDB(){
                          //'mysql:host=localhost;port=3306;dbname=feedback','*login*','*password*' (if exists)
        return new PDO('mysql:host=localhost;port=3306;dbname=feedback','root');
    }
}