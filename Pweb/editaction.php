<?php
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header("Location: form.php");
    }
    include('dbconnect.php');

    $username = $_POST ['username'];
    $email = $_POST ['email'];
    $nama = $_POST ['nama'];
    $id = $_POST ['id'];

    if($_POST['pswd'] == "")
    {
        $k->query("UPDATE user SET username='".$username."', nama='".$nama."',
        email='".$email."' WHERE id = '".$id."' ");
    }
    else 
    {
        $password = md5(sha1($_POST['pswd']));
        $k ->query("UPDATE user SET username='".$username."', nama='".$nama."',
        email='".$email."', pswd='".$password."' WHERE id = '".$id."'") ;
    }

    header("Location: main.php");