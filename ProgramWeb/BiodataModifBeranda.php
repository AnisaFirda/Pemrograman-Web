<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="Asset/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color: #B3C8CF; text-align: center; color:white; ">
              <header>
                <h1>Selamat Datang di Website Saya</h1>
              </header>
            </div>
            <div class="col-md-3" style="background-color: #F1EEDC; color: #Black; padding: 15px;">
                <h3>Anisa Firda Salsabila</h3>
                <h3><?php session_start(); echo $_SESSION ['nim']?></h3>
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
            <div class="col-md-9" style="background-color: white; text-align: justify;padding: 20px;">
            </head>
            <style>
                span.field{
                    font-weight: bold;
                    width: 200px;
                }
        
                .info {
                    margin-bottom: 10px;
                }
        
                .info span {
                    display: inline-block;
                    border: 1px;
                }
        
                .info-value {
                    margin-right: 5px;
                }
        
                img{
                    float: right;
                    clear: right;
                }
        
                .clear {
                    clear: right;
                    border: 1px solid black ;
                    padding: 5px;
                }
        
                .clearfix {
                    overflow: auto;
                }
            </style>
        <body>
            <h1 style="text-align: center;">Biodata Saya</h1>
            <div style="background-color: #F1F0E8;">
                <div class="clear">
                <div class="clearfix">
                <p><img src="IMG-20221228-WA0011.jpg" alt="cantik" style="width: 125px;">
                <div class="info">
                    <span class="field">Nama</span> 
                    <span class="info-value">:</span>
                    <span class="info-value"> Anisa Firda Salsabila</span>
                </div>
        
                <div class="info">
                    <span class="field">NIM</span> 
                    <span class="info-value">:</span>
                    <span class="info-value">A12.2022.06801</span>
                </div>
        
                <div class="info">
                    <span class="field">Jenis Kelamin </span> 
                    <span class="info-value">:</span>
                    <span class="info-value">Perempuan</span>
                </div>
        
                <div class="info">
                    <span class="field">Tempat, tanggal lahir</span> 
                    <span class="info-value">:</span>
                    <span class="info-value">Wonosobo, 2 Agustus 2004</span>
                </div>
        
                <div class="info">
                    <span class="field">Asal Sekolah</span> 
                    <span class="info-value">:</span>
                    <span class="info-value">SMK N 1 Wonosobo</span>
                </div>
        
                <div class="info">
                    <span class="field">Alamat domisili </span> 
                    <span class="info-value">:</span>
                    <span class="info-value">Purwosari 02/02, Kejajar,Wonosobo</span>
                </div>
        
                <div class="info">
                    <span class="field">Email </span> 
                    <span class="info-value">:</span>
                    <span class="info-value">anisafirdasalsabila@gmail.com</span>
                </div>
        
                <div class="info">
                    <span class="field">Telp  </span> 
                    <span class="info-value">:</span>
                    <span class="info-value">085870122766</span>
                </div>
            </div>
            </p>
            </div>
            </div>
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