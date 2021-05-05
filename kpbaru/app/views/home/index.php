<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/signin.css">

</head>

<body>


    <form action="<?= BASEURL; ?>/home/index" method="POST">
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
                <button type="submit" name="login">SIGN IN</button>
                <a href="<?= BASEURL; ?>/home/dashboard">Lupa Password ??</a>
            </div>
        </div>
    </form>

</body>

</html>