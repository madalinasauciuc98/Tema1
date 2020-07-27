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
</body>
</html>