<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/dashboard.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/sidebar.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/scrollTop.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300&family=Playfair+Display:wght@400;500&family=Poppins:wght@200;300;500;600&family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#32CD32" fill-opacity="0.9" d="M0,128L120,122.7C240,117,480,107,720,133.3C960,160,1200,224,1320,256L1440,288L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
        </svg>
    </div>
    <div class="navigation">
        <div class="header-wrapper">
            <img src="<?= BASEURL; ?>/img/logo.png" alt="">
            <div class="toggle"></div>
        </div>
        <ul>
            <li>
                <a href="<?= BASEURL; ?>/home/dashboard">
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/home/login">
                    <span class="icon"><i class="fa fa-sign-in"></i></span>
                    <span class="title">Login Anggota</span>
                </a>
            </li>
        </ul>
    </div>


    <h1 class="text-center header-h1">BMT BERKAH MEDIKA NUSANTARA</h1>
    <div class="header ">
        <div class="header-first">
            <img src="<?= BASEURL; ?>/img/mask.svg" alt="">
        </div>
        <div class="header-second">
            <img src="<?= BASEURL; ?>/img/logo.png" alt="">
            <h3>Koperasi yang didirikan oleh para dokter untuk membantu para umkm dalam menjalankan usahanya.Dengan upaya untuk memperbaiki keadaan dan kesejahteraan ekonomi masyarakat.Penyediaan program dan produk yang sesuai dengan kebutuhan anggota</h3>
            <h4>Koperasi ini beralamatkan di Jalan Villa Kalijudan Indah BLOK N-8 SURABAYA.</h4>
        </div>
    </div>
    <div class="unit ">
        <h1 class="text-center ">UNIT USAHA KOPERASI SYARIAH BMN </h1>
        <div class="container">
            <div class="child mt-5 row">
                <div class="sub-menu col-md-3 offset-sm-1">
                    <h2 class="text-center mb-4">MEDIKA SEJAHTERA MART</h2>
                    <p>KS BMN memiliki unit untuk usaha mini market yang berlokasi di Univ.Airlangga-Fakultas Kedokteran,di Surabaya</p>
                    <p>FASILITAS</p>
                    <ul>
                        <li>Pesan antar wilayah Surabaya </li>
                        <li>Menyediakan sarana sedekah online</li>
                    </ul>
                    <img src="<?= BASEURL; ?>/img/logo.png" alt="">
                </div>
                <div class="sub-menu  col-md-4 ">
                    <h2 class="text-center mb-4">MEDIKA TOUR DAN TRAVEL</h2>
                    <p>FASILITAS</p>
                    <ul>
                        <li>Melayani pembelian tiket</li>
                        <li>Melayani pembayaran PPOB bulanan</li>
                        <li>Melayani pembelian pulsa, paket data,dan lain-lain</li>
                        <li>LOKASI : Villa Kalijudan Indah BLOK N-8 SURABAYA</li>
                    </ul>
                    <img src="<?= BASEURL; ?>/img/logo.png" alt="">
                </div>
                <div class="sub-menu  col-md-3 ">
                    <h2 class="text-center mb-4">Baitul Maal Wat Tamwil </h2>
                    <p>Simpan pinjam berbasis syariah dengan tujuan untuk meningkatkan kualitas ekonomi untuk mesejahterahkan anggota dan masyarakat.</p>
                    <p>Lokasi : Villa Kalijudan Indah BLOK N-8 SURABAYA </p>
                    <img src="<?= BASEURL; ?>/img/logo.png" alt="">
                </div>
            </div>


        </div>
    </div>
    <div class="mart">
        <div class="container ">
            <h1 class="text-center mb-5 py-2">
                BERKAH MEDIKA MART
            </h1>
            <div class="row  ">
                <div class="col-md-3 sub-menu-mart sub-menu-mart-1 rounded-3 offset-sm-1">
                    <img src="<?= BASEURL; ?>/img/image2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-4  sub-menu-mart sub-menu-mart-2 rounded-3">
                    <img src="<?= BASEURL; ?>/img/image3.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-3 sub-menu-mart sub-menu-mart-3 rounded-3">
                    <img src="<?= BASEURL; ?>/img/image4.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

        <div class="banner">
            <div class="clouds">
                <img src="<?= BASEURL; ?>/img//clouds/cloud1.png" style="--i:1" alt="">
                <img src="<?= BASEURL; ?>/img//clouds/cloud2.png" style="--i:2" alt="">
                <img src="<?= BASEURL; ?>/img//clouds/cloud3.png" style="--i:3" alt="">
                <img src="<?= BASEURL; ?>/img//clouds/cloud4.png" style="--i:4" alt="">
                <img src="<?= BASEURL; ?>/img//clouds/cloud5.png" style="--i:5" alt="">
            </div>
        </div>
    </div>
    <footer class="last ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="last-web text-center">
                        <span>
                            <h6>Copyright 2020 by <a href="">SangSloop.</a></h6>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>