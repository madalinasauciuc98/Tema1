
<html>
<head>
    <title>Creeaza o carte</title>

</head>
<body>
<div class="container">
    <div class="col-md-12">
        <form action="store.php" method="POST">
            <label for="title">Title </label>
            <input type="text" id="title" name="title" />
            <label for="author_name">Author name </label>
            <input type="text" id="author_name" name="author_name" />
            <label for="publisher_name">Publisher name </label>
            <input type="text" id="publisher_name" name="publisher_name" />
            <label for="publish_year">Publish year </label>
            <input type="text" id="publish_year" name="publish_year" />
            <input type="submit"  value="Save" />
        </form>
    </div>
</div>

</body>
</html>
