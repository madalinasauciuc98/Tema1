<?php

class DB{
    private static ?PDO $instance = null;
    public static function getInstance()
    { $servername="localhost";
        $username="root";
        $password="";
        $dbname="tema1";
        if(is_null(self::$instance))
        {
            self::$instance = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        }
        return self::$instance;
    }
}
?>