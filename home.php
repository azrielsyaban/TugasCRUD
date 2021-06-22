<?php
    require('function.php');

    $tables = read("SELECT * FROM datasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <style>
        *{
            box-sizing: border-box;
        }
        body{
            font-family: sans-serif;
            margin: 0;
        }
        table{
            margin: 50px auto;
            box-shadow: 0 0 10px gray;
        }
        [href="add.php"]{
            padding: 10px;
            margin: 20px;
            float: right;
            background: blue;
            text-decoration: none;
            color: #fff;
        }
        .both{
            clear: both;
        }
        th{
            background: #333333;
            color: #fff;
        }
        .bg:nth-child(even){
            background: #cccccc;
        }
        .btn-tbl{
            text-decoration: none;
            padding: 5px 10px;
            margin: 5px;
            color: #fff;
            display: inline-block;
        }
        .btn-tbl:first-child{
            background: blue;
        }
        .btn-tbl:last-child{
            background: red;
        }

    </style>
</head>
<body>
<a href="add.php">tambah data</a>
<div class="both"></div>

<table border="1" cellspacing="0" cellpadding="10">

    <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    
    <?php $id = 1; ?>
    <?php foreach( $tables as $table ) { ?>
        <tr class="bg">
            <td> <?= $id ?> </td>
            <td> <?= $table["foto"]; ?> </td>
            <td> <?= $table["nis"]; ?> </td>
            <td> <?= $table["nama"]; ?> </td>
            <td> <?= $table["email"]; ?> </td>
            <td> <?= $table["jurusan"]; ?> </td>
            <td>
                <a href="update.php?id=<?= $table["id"]; ?>" class="btn-tbl">ubah</a>
                <a href="delete.php?id=<?= $table["id"]; ?>" class="btn-tbl" onclick="return confirm('Hapus ?');">hapus</a>
            </td>
        </tr>
        <?php $id++; ?>
    <?php } ?>
</table>
    
</body>
</html>
