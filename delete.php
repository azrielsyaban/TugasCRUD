<?php
    require('function.php');
    $id = $_GET["id"];
    if( delete($id) > 0 ){
        header("location: home.php");
    }else{
        header("location: home.php");
    }
?>