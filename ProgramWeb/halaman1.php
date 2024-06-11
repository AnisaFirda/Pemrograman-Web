
    <?php session_start();
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header ("Location: /form.html");
        exit();
    }
    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Asset/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color: #B3C8CF; text-align: center; color:white; position: fixed;">
            <header>
                <h1>Selamat Datang di Website Saya</h1>
            </header>
            </div>
            <div class="col-md-3" style="background-color: #F1EEDC; color: #Black; padding: 15px; "><br><br>
                <h3> Anisa Firda Salsabila </h3>
                <h3><?php echo $_SESSION ['nim']?></h3>
                <li><a href="halaman1.php">Beranda</a></li>
                <li><a href="BiodataModifBeranda.php">Biodata</a></li>
                <li><a href="JadwalKuliah.php">Jadwal kuliah</a></li>
                <li><a href="logout.php">Logout</a></li>
                <search>
                    <form>
                    <input name="fsrch" id="fsrch" placeholder="Serch Information" style="margin: 10px; ">
                    </form>
                </search>
            </div>
            <div class="col-md-9" style="background-color: white; text-align: justify;">
                <div class="clear">
                    <div class="clearfix"></div>
                    <p><img src="Candi1.jpg" alt="candiatas" style="width: 700px; padding: 20px;" ></p>
                </div>
                Candi Arjuna Dieng adalah kompleks candi Hindu yang terletak di Dataran Tinggi Dieng, 
                Jawa Tengah, Indonesia. Kompleks candi ini terdiri dari lima candi utama yang didedikasikan 
                untuk dewa-dewa Hindu, dengan Candi Arjuna sebagai candi utama yang paling dominan.
                Sejarah Candi Arjuna Dieng secara khusus tidak terlalu jelas, tetapi diduga kompleks 
                candi ini dibangun pada awal abad ke-8 Masehi, pada masa pemerintahan Dinasti Sanjaya atau 
                Dinasti Mataram Kuno. Candi-candi di Dataran Tinggi Dieng secara umum merupakan bagian 
                dari periode kejayaan agama Hindu-Buddha di Indonesia, di mana pemerintahan di Jawa Tengah 
                dan Jawa Timur dipengaruhi oleh kepercayaan Hindu dan Buddha.
                <div class="clear">
                    <div class="clearfix"></div>
                    <p><img src="candi3.jpg" alt="candiatas" style="width: 350px; padding: 20px; clear: right; float: right;" ></p>
                </div>
                Candi-candi tersebut mungkin memiliki fungsi sebagai tempat ibadah, 
                tempat pertemuan, serta tempat peringatan. Struktur arsitektur dan relief 
                yang ada di Candi Arjuna dan kompleks Dieng secara keseluruhan menunjukkan pengaruh kuat 
                agama Hindu pada masa itu, dengan banyak relief yang menggambarkan kisah-kisah epik 
                Hindu seperti Mahabharata dan Ramayana.
                Selama berabad-abad, Candi Arjuna Dieng telah menjadi salah satu situs bersejarah yang 
                penting di Indonesia, menarik minat para arkeolog, sejarawan, dan wisatawan dari seluruh dunia. 
                Tetapnya situs ini sebagai saksi bisu dari masa lalu yang megah menjadikannya salah satu warisan 
                budaya yang sangat berharga bagi Indonesia.
            </div>
            <div class="col-md-12" style="background-color: #B3C8CF; text-align: center;color:white; padding: 15px 0;">
                <footer>
                    <p>Copyright &copy; 2024. All rights reserved.</p>
                </footer>
            </div>
    </div>
    </div>
</body>
</html>