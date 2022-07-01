<?php
    require "fungsi.php";

    $kabupaten = tampil("SELECT * FROM kabupaten");

    $wisata = tampil("SELECT * FROM wisata");

    // var_dump($kabupaten); die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>PROFILE KABUPATEN GOWA</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style-1.css">
    <link rel="stylesheet" href="style/style-2.css">
    <link rel="stylesheet" href="style/style-3.css">
    <link rel="stylesheet" href="style/style-4.css">
    <link rel="stylesheet" href="style/style-5.css">
    <link rel="stylesheet" href="style/style-6.css">
</head>
<body>
    
    <div id="level-1">
        <nav>
            <a href="#level-1"><h1><img src="image/logogowa.png" alt="" srcset="" width="25px"> Gowa</h1></a>
            <a href="#level-2"><i class="bi bi-building" style="margin-right: 10px;"></i>Deskripsi Daerah</a>
            <a href="#level-3"><i class="bi bi-bank" style="margin-right: 10px;"></i>Kabupaten</a>
            <a href="#level-4"><i class="bi bi-signpost-2" style="margin-right: 10px;"></i>Destinasi Wisata</a>
            <a href="#level-5"><i class="bi bi-chat-square-text" style="margin-right: 10px;"></i>Pengaduan Publik</a>
            <a href="#level-6"><i class="bi bi-info-circle" style="margin-right: 10px;" ></i>Tentang</a>
            <a href="login.php"><i class="bi bi-door-open" style="margin-right: 10px;"></i>Login</a>
        </nav>
        <div class="hero-item">
            <h4>Selamat Datang Di <br/>
                Portal Resmi <br/>
                Kabupaten Gowa</h4>     
            <h1>Gowa<span>Bersatu</span></h1>
            <h6>Ewako Gowa</h6>
        </div>

    </div>
    <div id="level-2">
        <h1><i class="bi bi-building" style="margin-right: 20px;"></i>Deskripsi Daerah</h1>
        <lottie-player src="./image/82554-cityscape.json" 
        style="width: 100%; height:300px; margin:0; transform: translateY(40%) translateX(20%);"
        background="transparent" speed="1" class="lt-1" loop autoplay></lottie-player>
        <div class="dalam">
            <p>
            Kabupaten Gowa adalah salah satu Daerah Tingkat II di Provinsi Sulawesi Selatan, Indonesia. Ibu kota kabupaten ini terletak di Kota Sungguminasa. 
            Kabupaten ini memiliki luas wilayah 1.883,32 km² atau sama dengan 3,01% dari luas wilayah Provinsi Sulawesi Selatan dan berpenduduk sebanyak ± 652.941 jiwa, 
            dimana bahasa yang digunakan di kabupaten ini adalah bahasa Makassar dengan suku Konjo Pegunungan yang mendiami hampir seluruh Kabupaten Gowa. 
           
            </p>
            <a href="level-2.html">selengkapnya</a>
            <div class="dalamdua"></div>
        </div>
    </div>
    <div id="level-3">
        <h1><i class="bi bi-bank" style="margin-right: 20px;"></i>Kabupaten</h1>
        <table border="1" class="my-table">
            <thead>
                <th>No.</th>
                <th>Nama Kecamatan</th>
                <th>Jumlah Penduduk</th>
                <th>Luas Wilayah</th>
                <th>Jumlah Desa</th>
                <th>Jumlah Kelurahan</th>
            </thead>
            <tbody>
            <?php
                foreach ($kabupaten as $i => $rows) :
            ?>
            <tr>
                <td> <?php echo $i+1?></td>
                <td> <?php echo $rows['nama_kecamatan']?></td>
                <td> <?php echo $rows['jumlah_penduduk']?> jiwa</td>
                <td> <?php echo $rows['luas_wilayah']?> km2</td>
                <td> <?php echo $rows['jumlah_desa']?></td>
                <td> <?php echo $rows['jumlah_kelurahaan']?></td>
            </tr>
            <?php
                endforeach;
            ?>
            </tbody>
        </table>
    </div>
    <div id="level-4">
        <h1><i class="bi bi-signpost-2" style="margin-right: 20px;"></i>Destinasi Wisata</h1>
        <div class="container">
            <?php foreach($wisata as $rows): ?>
            <a class="card" href="card-1.php?id=<?= $rows['id']?>">
                <img src="./image/<?= $rows['foto_wisata']?>" alt="" class="img-container-1">
                <p class="place"><?= $rows['nama_wisata'] ?></p>
                <p class="location"><i class="bi bi-geo-alt-fill" style="margin-right: 10px;"></i><?= $rows['lokasi_wisata']?></p>
            </a>
            <?php endforeach ?>
        </div>
    </div>
    <div id="level-5"> 
        <h1><i class="bi bi-chat-square-text" style="margin-right: 20px;"></i>Pengaduan Publik</h1>
        <div class="krisar-container">
            <div class="cnt-1 cnt">
                <h2>Ayo Laporkan Keluhan <br> Anda di Portal Kami</h2>
                <p>Keluhan akan langsung disampaikan ke pemerintah <br> melalui portal ini</p>
                <a href="level-5.php">Ayo Mengeluh</a>
            </div>
            <div class="cnt-2 cnt">
                <lottie-player src="./image/lf30_editor_ov8jduze.json" 
                style="height:300px;"
                background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
    <div id="level-6">
        <h1><i class="bi bi-info-circle" style="margin-right: 10px;" ></i>Tentang</h1>
        <div class="dalam-1">
            <h2>Gowa<span>.go.id</span></h2>
            <p>
            Kabupaten Gowa adalah salah satu Daerah Tingkat II di Provinsi Sulawesi Selatan, Indonesia. Ibu kota kabupaten ini terletak di Kota Sungguminasa. 
            Kabupaten ini memiliki luas wilayah 1.883,32 km² atau sama dengan 3,01% dari luas wilayah Provinsi Sulawesi Selatan dan berpenduduk sebanyak ± 652.941 jiwa, 
            dimana bahasa yang digunakan di kabupaten ini adalah bahasa Makassar dengan suku Konjo Pegunungan yang mendiami hampir seluruh Kabupaten Gowa. 
           
            </p>
        </div>
        <div class="dalam-2">
            <div class="about">
                <h1>About <span>Developer</span></h1>
                <div class="container">
                    <div class="dalam2-2">
                    </div>
                    <div class="bio">
                        <p>Teknik Informatika</p>
                        <p>Sains Dan Teknologi</p>
                        <p>UIN ALAUDDIN MAKASSAR</p>
                    </div>
                </div>
                <div class="des">
                    <p class="tebal">Description :</p>
                    <p>
                        CLASS B <br>
                        Muh Reski Saputra - 60200120075 <br>
                        Irma Yulianti - 
                    </p>
                    <p class="tebal">Contact :</p>
                    <p><i class="bi bi-envelope" style="margin-right: 10px;"></i>gowa@gmail.com</p>
                    <p><i class="bi bi-instagram" style="margin-right: 10px;"></i>_ewakogowa</p>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>