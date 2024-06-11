<?php
    $username = $_POST['nim'];
    $password = $_POST ['password'];

    $u = 'A12.2022.06801';
    $p = 'pass001';

    if ($username== $u AND $password ==$p)
    {
        session_start();
        $_SESSION['nim'] = $username;
        $_SESSION['is_logged_in'] = TRUE;

        header("Location: halaman1.php"); //memindahkan halaman atau re-derec secara otomatis
    }

    else
    {
        echo "NIM atau password salah";
    }