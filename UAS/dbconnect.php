<?php
    $server = '127.0.0.1:3306';//localhost:3306
    $username = 'root';
    $password = '';
    $namadb = 'anisa';

    mysqli_connect($server, $username, $password, $namadb);

    $k = new mysqli($server, $username, $password, $namadb);
    if($k->connect_error)
    {
       echo "failed ", $k->connect_error;
       exit();
    }