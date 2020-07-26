<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tema1";

try {
    $conexiune = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conexiune->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
    echo  $e->getMessage();
}


?>