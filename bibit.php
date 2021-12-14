<?php

include('./help/DB.php');

$d = DB::query('SELECT * FROM barang WHERE id_jenis_brg=7 ORDER BY nama_brg');
$d2 = DB::query('SELECT * FROM jenis_barang');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAMAJAYA</title>
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./index.php"><img class="RJ-Putih" src="./Assets/RJ-Putih.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./produk.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./kontak.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./tentangKami.php">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero2">
        <div class="container d-flex justify-content-end flex-column">
            <div class="row">
                <div class="col pb-5 ps-5">
                    <h1>
                        PRODUK
                    </h1>
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="./index.php">Beranda</a></li>
                              <li class="breadcrumb-item"><a href="./produk.php">Produk</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Bibit</li>
                            </ol>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="product-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex flex-column d-none d-md-block">
                    <div class="category">
                        <div class="category-title">
                            Kategori Produk
                        </div>
                        <ul>
                            <?php foreach ($d2 as $data) { ?>
                                <li><a class="<?php if($data['nama_alt'] == 'bibit') { echo 'active';} ?>" href="<?php echo $data['nama_alt'] . '.php'?> "><?php echo $data['nama_jenis_brg'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-12 d-block d-md-none category-list">
                    <ul class="d-flex flex-wrap justify-content-center">
                        <?php foreach ($d2 as $data) { ?>
                            <li class="py-3 px-3"><a class="<?php if($data['nama_alt'] == 'bibit') { echo 'active';} ?>" href="<?php echo $data['nama_alt'] . '.php'?> "><?php echo $data['nama_jenis_brg'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col list-product d-flex flex-wrap justify-content-center justify-content-sm-start">
                    <?php foreach ($d as $data) { ?>
                        <div class="card">
                            <img src="./Assets/barang/<?php echo $data['img_brg']; ?>" alt="">
                            <p>
                                <?php echo $data['nama_brg']; ?>
                                <br>
                                Rp. <?php echo $data['harga_brg']; ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact contact2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-4 d-none d-md-block">
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <h1 class="title-section">
                                HUBUNGI KAMI
                            </h1>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-wrap">
                <div class="col-sm-4 d-flex flex-column justify-content-center align-items-center my-5">
                    <p>WHATSAPP</p>
                    <p><a href="https://api.whatsapp.com/send?phone=6282246465869" target="_blank">
                        <i class="fab fa-whatsapp"></i> +6282246465869
                    </a></p>
                </div>
                <div class="col-sm-4 d-flex flex-column justify-content-center align-items-center my-5">
                    <p>EMAIL</p>
                    <p><a href="mailto:ramadhaniak1125@gmail.com" target="_blank">
                        <i class="far fa-envelope"></i> ramadhaniak1125@gmail.com
                    </a></p>
                </div>
                <div class="col-sm-4 d-flex flex-column justify-content-center align-items-center my-5">
                    <p>SOSIAL MEDIA</p>
                    <div>
                        <a href="">
                            <i class="fab fa-facebook-square fa-3x mx-2"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-instagram-square fa-3x mx-2"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-twitter-square fa-3x mx-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row d-flex flex-wrap">
                <div class="col-sm-4 d-flex flex-column justify-content-center align-items-center my-3">
                     <img width="150px" src="./Assets/RJ-Putih.png" alt="">
                </div>
                <div class="col-sm-6 d-flex flex-column justify-content-start align-items-center my-3">
                    <p>LOKASI</p>
                    <div>
                        <p>Jl. Raya Margototo, Desa Margototo, Kec. Metro Kibang, Kab. Lampung Timur</p>
                    </div>
                </div>
                <div class="col-sm-2 d-flex flex-column justify-content-start align-items-center my-3">
                    <p>BANTUAN</p>
                    <div>
                        <p><a href="./tentangKami.php" target="_blank">Tentang Kami</a></p>
                        <p><a href="./produk.php" target="_blank">Produk</a></p>
                        <p><a href="./kontak.php" target="_blank">Kontak Kami</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col d-flex align-items-center justify-content-center">
                    <p>
                        © 2021 RAMAJAYA. ALL RIGHTS RESERVED.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="./js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/386e6055da.js" crossorigin="anonymous"></script>
</body>

</html>