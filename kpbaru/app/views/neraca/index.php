<div class="neraca container">
    <h1 class="text-center">Berkah Medika Nusantara</h1>
    <h2 class="text-center">MART</h2>

    <h2 class="mb-4">NERACA</h2>

    <form action="<?= BASEURL; ?>/neraca/tambah" method="post">

        <div class="mb-3 row">
            <label for="kasir" class=" col-sm-4 form-label">Kasir</label>
            <div class="col-sm-6">
                <input type="text" class="form-control " id="kasir" name="kasir" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="bank" class=" col-sm-4 form-label">Bank</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="bank" name="bank" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="brankas" class=" col-sm-4 form-label">Brankas</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="brankas" name="brankas" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="piutang" class=" col-sm-4 form-label">Piutang</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="piutang" name="piutang" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="stok" class=" col-sm-4 form-label">Stok</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="stok" name="stok" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="sewa" class=" col-sm-4 form-label">Sewa</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="sewa" name="sewa" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="akumulasi_sewa" class=" col-sm-4 form-label">Akumulasi Sewa</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="akumulasi_sewa" name="akumulasi_sewa" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="komp" class=" col-sm-4 form-label">Komp</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="komp" name="komp" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="akumulasi_komp" class=" col-sm-4 form-label">Akumulasi Komp</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="akumulasi_komp" name="akumulasi_komp" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kulkas" class=" col-sm-4 form-label">Kulkas</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="kulkas" name="kulkas" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="akumulasi_kulkas" class=" col-sm-4 form-label">Akumulasi Kulkas</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="akumulasi_kulkas" name="akumulasi_kulkas" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kulkas_kantor" class=" col-sm-4 form-label">Kulkas kantor</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="kulkas_kantor" name="kulkas_kantor" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="akumulasi_kulkas_kantor" class=" col-sm-4 form-label">Akumulasi Kulkas Kantor</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="akumulasi_kulkas_kantor" name="akumulasi_kulkas_kantor" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="hp" class=" col-sm-4 form-label">Hp</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="hp" name="hp" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="akumulasi_hp" class=" col-sm-4 form-label">Akumulasi hp</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="akumulasi_hp" name="akumulasi_hp" autocomplete="off">
            </div>
        </div>

        <input type="hidden" name="idPegwaiiii" id="idPegwaiiii">
        <div class="col-auto mt-4">
            <button type="submit" class="btn btn-primary mb-3" name="neraca">Simpan</button>
        </div>
    </form>
</div>