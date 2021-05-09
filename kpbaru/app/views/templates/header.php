<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/side.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300&family=Playfair+Display:wght@400;500&family=Poppins:wght@200;300;500;600&family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
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
                <a href="<?= BASEURL; ?>/neraca">
                    <span class="icon"><i class="fa fa-bar-chart"></i></span>
                    <span class="title">Neraca</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/modal">
                    <span class="icon"><i class="fa fa-pie-chart"></i></span>
                    <span class="title">Modal</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/kotor">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <span class="title">Kotor</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/laba ">
                    <span class="icon"><i class="fa fa-leaf"></i></span>
                    <span class="title">Laba</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/home/logout">
                    <span class="icon">
                        <i class="fa fa-times-circle"></i>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>