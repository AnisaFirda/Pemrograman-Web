<?php
 

    include('dbconnect.php');
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    
    $data = $k->query("SELECT * FROM mhs WHERE id = '".$id."'");
    
    if($data -> num_rows == 1)
    {
        $datauser = $data -> fetch_assoc();
        ?>
        <form action="editaction.php" method="post">
            <input type="text" name="nim" required placeholder="nim" value="<?php echo $datauser ['nim']?>">
            <input type="text" name="nama" required placeholder="Nama Lengkap" value="<?php echo $datauser ['nama']?>">
            <input type="text" name="alamat" required placeholder="alamat" value="<?php echo $datauser ['alamat']?>">
            <input type="text" name="progdi" required placeholder="progdi" value="<?php echo $datauser ['progdi']?>">
            <input type="text" name="password" required placeholder="password" value="<?php echo $datauser ['password']?>">
            <input type="hidden" name="userid" value="<?php echo $datauser ['id']; ?>">
            <input type="submit" value="Simpan">
        </form>
        
    <?php

    }
    else{
        echo "data tidak ditemukan";
    }