<?php

$connectDB = mysqli_connect('localhost', 'root', '', 'smkpesat')
//koneksi


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" id="gambar" name="gambar" required>
            </li>
            <li>
                <label for="nis">Nis : </label>
                <input type="text" id="nis" name="nis" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" id="email" name="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" id="jurusan" name="jurusan">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>