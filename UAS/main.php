<?php
    session_start();
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header("Location: form.php");
    }
    include ("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    
    <h2 style="text-align: center;" >Data Mahasiswa</h2>
    <a href="tambah.php"> + Tambah Data</a><br><br>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Program Studi</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php
            $i =1;
            $query = mysqli_query($k, "SELECT * FROM mhs");
            while ($data = mysqli_fetch_array($query)){ 
        ?>

        <tr>
           <td><?php echo $i; ?></td>
           <td><?php echo $data['nim']; ?></td>
           <td><?php echo $data['nama']; ?></td>
           <td><?php echo $data['alamat']; ?></td>
           <td><?php echo $data['progdi']; ?></td> 
           <td><?php echo $data['password']; ?></td>
           <td>
                <a href="edit.php?id= <?php echo $data['id'] ?>">Edit</a>|
                <a href="hapus.php?id= <?php echo $data['id'] ?>">Hapus</a>
           </td>
        </tr>
        <?php
            $i++;
            }
        ?>

    </table>
    
</body>
</html>