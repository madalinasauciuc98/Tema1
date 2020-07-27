<?php


class bookController
{
        public function index()
        {
            $pdo=DB::getInstance()
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
        foreach ($data as $book)
        {
            echo "<tr><td>" . $book["id"]. "</td><td>" . $book["title"] . "</td><td>" .
                $book["id_author"] . "</td><td>" . $book["id_publisher"] .
                "</td><td>" . $book["publish_year"] . "</td><td>" . $book["created_at"] .
                "</td><td>" . $book["updated_at"] .
                "</td><td><a href='edit.php?id=". $book["id"]."'>EDIT</a></td><td><a href='delete.php?id=". $book["id"]."'>DELETE</a></td></tr>";

        }
        echo "</table>";
    }
    catch(PDOException $e)
    {
        $e->getMessage();
    }

            loadView('index.view.php');
        }
    public function create()
    {

    }
    public function store()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
}