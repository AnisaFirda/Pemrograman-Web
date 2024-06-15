<?php
    include("dbconnect.php");

    $username = $_POST['username'];
    $password = md5(sha1($_POST['pswd']));
    $email = $_POST['email'];
    $nama = $_POST['nama'];

    $insert = $k->query("INSERT INTO user (username,nama,email,pswd,active) VALUES ('".$username."','".$nama."','".$email."','".$password."',1)");
    if($insert)
    {
       header("Location: main.php");
    }
    else
    {
        echo "insert data gagal";
    }