<?php
require '1.php';
$title=$_POST['title'];
$author_name=$_POST['author_name'];
$publisher_name=$_POST['publisher_name'];
$publish_year=$_POST['publish_year'];

var_dump($title, $author_name, $publisher_name, $publish_year);

$sql = $conexiune->prepare("INSERT INTO carti1 VALUES (NULL, :title, :author_name, :publisher_name, :publish_year, CURRENT_TIMESTAMP (), NULL)");
$sql->bindParam('title', $title);
$sql->bindParam('author_name', $author_name);
$sql->bindParam('publisher_name', $publisher_name);
$sql->bindParam('publish_year', $publish_year);

$sql->execute();
header("Location:index.php?success=create");