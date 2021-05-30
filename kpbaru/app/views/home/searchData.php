<div class="container no-print">
    <h1 class="text-center py-4">Selamat Datang Di Halaman Dashboard </h1>
    <div class="row mt-5">
        <h2 class="col-sm-3">Data Terbaru</h2>
    </div>
    <div class="row">
        <form action="<?= BASEURL; ?>/home/dashboardAnggota" class="col-sm-9 mt-2  d-flex justify-content-between" method="POST">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Cek Data Neraca dan Modal
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Cek DataLaba Rugi dan Kotor
                </label>
            </div>
            <input type="date" name="tanggalNeraca">
            <button type="submit" class="mx-2 btn btn-outline-success " name="caridata">CARI DATA <span><i class="fa fa-search" aria-hidden="true"></i></span></button>
        </form>
    </div>
</div>