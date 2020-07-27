<?php
require '1.php';
$sql = $conexiune -> prepare("SELECT * FROM carti1 WHERE `id`=?");
$sql->execute([$_GET['id']]);
$book = $sql->fetch (PDO::FETCH_OBJ);
?>
<html>
<head>
    <title>Editeaza o carte</title>
</head>
<body>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php $book["id"];?>" />
    <p>Title:
        <input type="text" name="title" size="30" value="<?php  $book["title"];?>" />
    </p>
    <p>Author name:
        <input type="text" name="author_name" size="30" value="<?php  $book["id_author"];?>" />
    </p>
    <p>Publisher name:
        <input type="text" name="publisher_name" size="30" value="<?php  $book["id_publisher"];?>" />
    </p>
    <p>Publish year:
        <input type="text" name="publish_year" size="30" value="<?php  $book["publish_year"];?>" />
    </p>

    <p>
        <input type="submit" name="submit" value="Send" />
    </p>
</form>
</body>
</html>
