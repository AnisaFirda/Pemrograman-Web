
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <form method="post" action="tambahaction.php">
    <table>
        <tr>
            <td>Nim</td>
            <td><input type="text" name="nim"></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" ></textarea></td>
        </tr>

        <tr>
            <td>Program Studi</td>
            <td><input type="text" name="progdi"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Simpan">
            <a href="main.php">Kembali</a>
            </td>
        </tr>
    </table>
   </form>
</body>
</html>