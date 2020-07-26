<?php
require '1.php';
$id=$_GET['id'];

$sql=$conexiune->prepare("DELETE FROM `carti1` WHERE `id`=:id");
$sql->execute([
    'id'=>$id
]);
header("Location:index.php");