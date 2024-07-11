<?php
 
    include("dbconnect.php");

    if (isset($_POST['nim']) && isset($_POST['password'])) {
    $nim = $_POST['nim'];
    $password = md5(($_POST['password']));

    $rs = $k->query("SELECT * FROM mhs WHERE nim='".$nim."' AND password = '".$password."' AND status=1");
    
    if($rs->num_rows == 1)
    {
        $baris = $rs->fetch_assoc();
        session_start();
        $_SESSION['nim'] = $baris['nim'];
        $_SESSION['id'] = $baris['id'];
        $_SESSION['views'] = 0;
        $_SESSION['is_logged_in'] = TRUE;
        header("Location: main.php");
        exit();
    }
    else
    {
        echo "Username atau password salah";
    }
    }
    else {
        echo "Isi form dulu";
    }