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

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proiect1";

try {
    $conexiune = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conexiune->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //creare tabela
    //echo "S-a stabilit conexiunea";
    $query="SELECT * FROM books";
    $data= $conexiune->query($query);
    echo"<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Author name</th>
        <th>Publisher name</th>
        <th>Publish year</th>
        <th>Created at</th>
        <th>Updated at</th>
    </tr>";
    foreach ($data as $row)
    {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["title"] . "</td><td>" .
            $row["author_name"] . "</td><td>" . $row["publisher_name"] .
            "</td><td>" . $row["publish_year"] . "</td><td>" . $row["created_at"] .
            "</td><td>" . $row["updated_at"] . "</td></tr>";

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


