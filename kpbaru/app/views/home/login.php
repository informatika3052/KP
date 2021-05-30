<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/signin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300&family=Playfair+Display:wght@400;500&family=Poppins:wght@200;300;500;600&family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">

</head>

<body>


    <form action="<?= BASEURL; ?>/home/login" method="POST">
        <div class="animasi">
            <h1>KOPERASI SYARIAH</h1>
            <h2>BERKAH MEDIKA NUSANTARA</h2>
            <img src="<?= BASEURL; ?>/img/logo.png" alt="">
            <div class="inputarea">
                <label for="nama"></label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" autocomplete="off" required>
                <label for="pass"></label>
                <input type="password" name="pass" id="pass" placeholder="Masukkan Password" autocomplete="off" required>
            </div>
            <div class="sigin">
                <div class="btnn">
                    <button type="submit" name="login">SIGN IN</button>
                </div>
                <a href="<?= BASEURL; ?>/home/dashboard">Lupa Password ??</a>
            </div>
        </div>
    </form>

</body>

</html>