<?php
require '1.php';
require 'functions.php';
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
    <input type="hidden" name="id" value="<?php echo $book->id;?>" />
    <p>Title:
        <input type="text" name="title" size="30" value="<?php echo $book->title;?>" />
    </p>
    <p>Author name:
        <input type="text" name="author_name" size="30" value="<?php echo $book->author_name;?>" />
    </p>
    <p>Publisher name:
        <input type="text" name="publisher_name" size="30" value="<?php echo $book->publisher_name;?>" />
    </p>
    <p>Publish year:
        <input type="text" name="publish_year" size="30" value="<?php echo $book->publish_year;?>" />
    </p>

    <p>
        <input type="submit" name="submit" value="Send" />
    </p>
</form>
</body>
</html>
