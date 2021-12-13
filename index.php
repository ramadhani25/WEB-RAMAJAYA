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
            <a class="navbar-brand" href="#"><img class="RJ-Putih" src="./Assets/RJ-Putih.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./produk.php">Produk</a>
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

    <header class="hero">
        <div class="container d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col hero-text">
                    <h1>
                        Distributor Obat, Pupuk, & Alat Pertanian
                    </h1>
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus
                        venenatis, lectus magna fringilla urna, porttitor.
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col hero-btn">
                    <a href="./kontak.php" class="btn btn-primary btn-kontak">
                        Kontak
                    </a>
                    <a href="./produk.php" class="btn btn-secondary btn-produk">Produk</a>
                </div>
            </div>
        </div>
    </header>

    <section class="about">
        <div class="container d-flex align-items-center">
            <div class="row">
                <div class="col about-text">
                    <div class="row d-flex flex-column">
                        <div class="col">
                            <img class="RJ-Hitam" src="./Assets/RJ-Hitam.png" alt="">
                        </div>
                        <br>
                        <div class="col">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Convallis odio elit et magna
                                mauris
                                tellus elementum. Netus est nam eget urna volutpat faucibus. Sit urna, amet auctor proin
                                sit
                                lectus adipiscing gravida. Non egestas enim erat mauris id. Varius amet amet nulla nisi
                                ut. Quis
                                nulla ultricies sed posuere ultrices quam felis rhoncus diam. Ac neque dignissim enim
                                libero in
                                consectetur bibendum sed. Tristique facilisis eget feugiat morbi facilisi. Vestibulum id
                                eu
                                cursus a in amet id lorem odio. Turpis condimentum nunc ac volutpat sed. Cursus quis
                                egestas
                                mollis et dictumst quam sit.
                            </p>
                            <p>
                                A nibh sed porta purus et. Nec nisl, fames tempor donec integer tincidunt at ullamcorper
                                arcu.
                                Nam vestibulum tempus volutpat sed neque. Purus pretium neque in vel risus. Cursus
                                adipiscing
                                cursus fermentum in arcu. Vestibulum adipiscing in id est suscipit in arcu purus est.
                                Enim amet,
                                feugiat mi lectus.
                            </p>
                        </div>
                        <br>
                        <div class="col">
                            <a href="./tentangKami.php" class="btn btn-primary btn-about">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col d-none d-md-block about-img">
                    <img class="IMG-About" src="./Assets/IMG-About.png" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <section class="location">
        <div class="container d-flex align-items-center">
            <div class="row">
                <div class="col-md-4 location-text d-flex align-items-center justify-content-center my-4">
                    <h1>LOKASI</h1>
                </div>
                <div class="col-md-4 location-text d-flex align-items-center justify-content-center my-4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis iaculis diam id etiam orci
                        tincidunt tempus non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis iaculis
                        diam id etiam orci tincidunt tempus non.
                    </p>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center my-4">
                    <a href="https://goo.gl/maps/vo1ntMYmkusH9PZF8" target="_blank" class="btn btn-primary location-btn">Lihat Lokasi</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="product">
        <div class="container product-container">
            <div class="row">
                <div class="container">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-5 d-none d-md-block">
                                <hr>
                            </div>
                            <div class="col-md-2">
                                <h1 class="title-section">
                                    PRODUK
                                </h1>
                            </div>
                            <div class="col-md-5 d-none d-md-block">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- List Produk -->
            <div class="row">
                <div class="col list-product d-flex flex-wrap justify-content-evenly">
                    <a href="">
                        <div class="card">
                            <img src="./Assets/Herbisida.jpg" alt="">
                            <p>HERBISIDA</p>
                        </div>                   
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="./Assets/Fungisida.jpg" alt="">
                            <p>FUNGISIDA</p>
                        </div>                   
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="./Assets/Insektisida.jpg" alt="">
                            <p>INSEKTISIDA</p>
                        </div>                   
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="./Assets/Rodentisida.jpg" alt="">
                            <p>RODENTISIDA</p>
                        </div>                   
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="./Assets/Moluskisida.jpg" alt="">
                            <p>MOLUSKISIDA</p>
                        </div>                   
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="./Assets/Pupuk.jpg" alt="">
                            <p>PUPUK</p>
                        </div>                   
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="./Assets/Bibit.jpg" alt="">
                            <p>BIBIT</p>
                        </div>                   
                    </a>
                    <a href="">
                        <div class="card">
                            <img src="./Assets/Sprayer.jpg" alt="">
                            <p>SPRAYER</p>
                        </div>                   
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center m-5">
                    <a href="./produk.php" class="btn btn-primary btn-about">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact">
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
                        <a href="#">
                            <i class="fab fa-facebook-square fa-3x mx-2"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram-square fa-3x mx-2"></i>
                        </a>
                        <a href="#">
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