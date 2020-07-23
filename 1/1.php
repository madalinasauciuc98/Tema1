<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proiect1";

try {
    $conexiune = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conexiune->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //creare tabela
 echo "S-a stabilit conexiunea";
}
catch(PDOException $e)
{
    $e->getMessage();
}

$conexiune=null;
?>