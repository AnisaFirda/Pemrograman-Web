<?php
    include("dbconnect.php");

    $id = $_GET['id'];
    $delete = $k->query("DELETE FROM mhs WHERE id='".$id."'");
    if($delete)
    {
        header("Location: utama.php");
    }
    else
    {
        echo "hapus data gagal";
    }
