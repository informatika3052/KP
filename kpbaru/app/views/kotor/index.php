<div class="neraca container">
    <h1 class="text-center">Berkah Medika Nusantara</h1>
    <h2 class="text-center">MART</h2>

    <h2 class="mb-4">KOTOR</h2>

    <form action="<?= BASEURL; ?>/kotor/tambah" method="post">

        <div class="mb-3 row">
            <label for="pendapat" class=" col-sm-4 form-label">Pendapatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="pendapat" name="pendapat" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="biayaPendapat" class=" col-sm-4 form-label">Biaya Pendapatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="biayaPendapat" name="biayaPendapat" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total" class=" col-sm-4 form-label">Total</label>
            <div class="col-sm-6">
                <input type="text" class="form-control convert-data" id="total" name="total" autocomplete="off">
            </div>
        </div>
        <input type="hidden" name="idPegwaii" id="idPegwaii">
        <input type="hidden" name="tanggalKotor" id="tanggalKotor" value="<?= date("Y-m-d"); ?>">
        <div class="col-auto mt-4">
            <button type="submit" class="btn btn-primary mb-3" name="kotor">Simpan</button>
        </div>
    </form>
</div>