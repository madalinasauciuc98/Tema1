<?php
include_once '1.php';

if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $author_name=$_POST['author_name'];
    $publisher_name=$_POST['publisher_name'];
    $publish_year=$_POST['publish_year'];
    $created_at=$_POST['created_at'];
    $updated_at=$_POST['updated_at'];

    $sql=$conexiune->prepare("INSERT INTO books(title, author_name, publisher_name, publish_year, created_at, updated_at) values (:title, :author_name, :publisher_name, :publish_year, :created_at, :updated_at)");
    $conexiune->beginTransaction();
    $sql->execute(array(':title'=>$title,
        ':author_name'=>$author_name,
        ':publisher_name'=>$publisher_name,
        ':publish_year'=>$publish_year,
        ':created_at'=>$created_at,
        ':updated_at'=>$updated_at));
    $conexiune->commit();
    echo "The new book is saved";
    $conexiune->null;
    header("Location:create.php");
    exit;

}
elseif($title="" || $author_name="" || $publisher_name="" || $publish_year="" || $created_at="" || $updated_at="")
{
    echo "Fail";
}

?>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
<form action="http://localhost:63342/1/cartiCreate.php" method="post">
    <p>Title:
        <input type="text" name="title" size="30" value="" />
    </p>
    <p>Author name:
        <input type="text" name="author_name" size="30" value="" />
    </p>
    <p>Publisher name:
        <input type="text" name="publisher_name" size="30" value="" />
    </p>
    <p>Publish year:
        <input type="text" name="publish_year" size="30" value="" />
    </p>
    <p>Created at:
        <input type="text" name="created_at" size="30" value="" />
    </p>
    <p>Updated at:
        <input type="text" name="updated_at" size="30" value="" />
    </p>

    <p>
        <input type="submit" name="submit" value="Send" />
    </p>
</form>
</body>
</html>
