<?php
    session_start();
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header("Location: form.php");
    }
include("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $nim = isset($_POST['nim']) ? $k->real_escape_string($_POST['nim']) : '';
    $nama = isset($_POST['nama']) ? $k->real_escape_string($_POST['nama']) : '';
    $alamat = isset($_POST['alamat']) ? $k->real_escape_string($_POST['alamat']) : '';
    $progdi = isset($_POST['progdi']) ? $k->real_escape_string($_POST['progdi']) : '';
    $password = isset($_POST['password']) ? $k->real_escape_string($_POST['password']) : '';

    if (!empty($password)) {
        $password = md5($password);
        $query = "UPDATE mhs SET nim='$nim', nama='$nama', alamat='$alamat', progdi='$progdi', password='$password' WHERE id='$id'";
    } else {
        $query = "UPDATE mhs SET nim='$nim', nama='$nama', alamat='$alamat', progdi='$progdi' WHERE id='$id'";
    }

    if ($k->query($query) === TRUE) {
        echo "<h2>Data berhasil diperbarui:</h2>";
        echo "ID: $id<br>";
        echo "NIM: $nim<br>";
        echo "Nama: $nama<br>";
        echo "Alamat: $alamat<br>";
        echo "Program Studi: $progdi<br>";
    } else {
        echo "Error: " . $query . "<br>" . $k->error;
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
<br>
<a href="main.php">Kembali</a>
