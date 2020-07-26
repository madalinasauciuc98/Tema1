<?php
require '1.php';

$id=$_POST['id'];
$title=$_POST['title'];
$author_name=$_POST['author_name'];
$publisher_name=$_POST['publisher_name'];
$publish_year=$_POST['publish_year'];

$sql = $conexiune->prepare("UPDATE `carti1`
                                    SET `title`=:title,
                                        `author_name`=:author_name,
                                        `publisher_name`=:publisher_name,
                                        `publish_year`=:publish_year,
                                        `updated_at`=NOW() WHERE `id`=:id");
$sql ->bindParam('id', $id);
$sql ->bindParam('title', $title);
$sql ->bindParam('author_name', $author_name);
$sql ->bindParam('publisher_name', $publisher_name);
$sql ->bindParam('publish_year', $publish_year);
$sql->execute();
header("Location:index.php");