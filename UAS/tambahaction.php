<?php
 session_start();
 if($_SESSION['is_logged_in'] != TRUE)
 {
     header("Location: form.php");
 }
        include("dbconnect.php");

        // Inisialisasi variabel untuk menampung hasil
        $rs = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil dan validasi input dari form
            $nim = isset($_POST['nim']) ? $k->real_escape_string($_POST['nim']) : '';
            $nama = isset($_POST['nama']) ? $k->real_escape_string($_POST['nama']) : '';
            $alamat = isset($_POST['alamat']) ? $k->real_escape_string($_POST['alamat']) : '';
            $progdi = isset($_POST['progdi']) ? $k->real_escape_string($_POST['progdi']) : '';
            $password = isset($_POST['password']) ? $k->real_escape_string($_POST['password']) : '';

            // Validasi input yang diperlukan
            if (!empty($nim) && !empty($nama) && !empty($alamat) && !empty($progdi) && !empty($password)) {
                $password = md5($password); // Hash password dengan MD5
                $query = "INSERT INTO mhs (nim, nama, alamat, progdi, password) VALUES ('$nim', '$nama', '$alamat', '$progdi', '$password')";

                if ($k->query($query) === TRUE) {
                    $rs = "Data berhasil ditambahkan:<br>NIM: $nim<br>Nama: $nama<br>Alamat: $alamat<br>Program Studi: $progdi";
                    header("Location: main.php");
                } else {
                    $rs = "Error: " . $query . "<br>" . $k->error;
                }
            } else {
                $rs = "Semua kolom harus diisi.";
            }
        }
