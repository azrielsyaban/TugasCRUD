<?php
    $connectDB = mysqli_connect('localhost', 'root', '', 'smkpesat');

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~READ
    function read($queryRead){
        global $connectDB;

        $tabel = mysqli_query($connectDB, $queryRead);
        while( $row = mysqli_fetch_assoc($tabel) ){
            $rows[] = $row;
        }

        return $rows;
    }
    
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~CREATE
    function add($post){
        global $connectDB;

        $foto = htmlspecialchars($post["foto"]);
        $nis = htmlspecialchars($post["nis"]);
        $nama = htmlspecialchars($post["nama"]);
        $email = htmlspecialchars($post["email"]);
        $jurusan = htmlspecialchars($post["jurusan"]);

        $queryAdd = "INSERT INTO smkpesat VALUES
                        ('', '$foto', '$nis', '$nama', '$email', '$jurusan')";

        mysqli_query($connectDB, $queryAdd);

        return;
    }

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~DELETE
    function delete($id){
        global $connectDB;

        $queryDelete = "DELETE FROM smkpesat WHERE id = $id";
        mysqli_query($connectDB, $queryDelete);

        return mysqli_affected_rows($connectDB);
    }


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~UPDATE
function update($post, $id){
    global $connectDB;

    $foto = htmlspecialchars($post["foto"]);
    $nis = htmlspecialchars($post["nis"]);
    $nama = htmlspecialchars($post["nama"]);
    $email = htmlspecialchars($post["email"]);
    $jurusan = htmlspecialchars($post["jurusan"]);

    $queryAdd = "UPDATE datasiswa SET 
                    foto = '$foto',
                    nis = '$nis',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan'
                WHERE id = $id
                ";

    mysqli_query($connectDB, $queryAdd);

    return mysqli_affected_rows($connectDB);
}


?>
