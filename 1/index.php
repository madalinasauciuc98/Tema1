<!DOCTYPE html>
<html>
<head>
    <title>Books </title>


    <style>
        table
        {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        tr:hover {background-color: #ddd;}
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: pink;
            color: white;
        }
    </style>
</head>
<body>
<div class="col-md-12" >
<h2>CARTI</h2>
</div>
<div class="col-md-12 text-right">
<a class="btn btn-success" href="create.php" >Creeaza o carte</a>
</div>
<table class="table-bordered">
    <tr>
        <th>Title</th>
        <th>Author name</th>
        <th>Publisher name</th>
        <th>Publish year</th>
        <th>Created at</th>
        <th>Updated at</th>
    </tr>
<?php

require "stylesheets.php";
$servername="localhost";
$username="root";
$password="";
$dbname="tema1";

try {
    $conexiune = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conexiune->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //creare tabela
    //echo "S-a stabilit conexiunea";
    $query="SELECT * FROM carti1";
    $data= $conexiune->query($query);
    foreach ($data as $row)
    {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"] . "</td><td>" .
            $row["author_name"] . "</td><td>" . $row["publisher_name"] .
            "</td><td>" . $row["publish_year"] . "</td><td>" . $row["created_at"] .
            "</td><td>" . $row["updated_at"] . "</td><td><a href='edit.php'><button type='button'>EDIT</a></button></td><td><button type='button'><a href='delete.php'>DELETE</a></button></td></tr>";

    }
    echo "</table>";
}
catch(PDOException $e)
{
    $e->getMessage();
}

?>

</body>
</html>


