<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/sidebar.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="navigation">
        <div class="header-wrapper">
            <img src="<?= BASEURL; ?>/img/logo.png" alt="">
            <div class="toggle"></div>
        </div>
        <ul>
            <li>
                <a href="<?= BASEURL; ?>/neraca">
                    <span class="icon"><i class="fa fa-question-circle"></i></span>
                    <span class="title">Neraca</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/modal">
                    <span class="icon"><i class="fa fa-question-circle"></i></span>
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
                    <span class="icon"><i class="fa fa-comment"></i></span>
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