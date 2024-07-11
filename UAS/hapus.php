<?php
 session_start();
 if($_SESSION['is_logged_in'] != TRUE)
 {
     header("Location: form.php");
 }
include("dbconnect.php");

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$delete = $k->query("DELETE FROM mhs WHERE id=".$id);

if($delete)
{
    header("Location: main.php");
}
else
{
    echo "hapus data gagal";
}