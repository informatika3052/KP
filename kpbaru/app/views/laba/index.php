<div class="neraca container">
    <h1 class="text-center">Berkah Medika Nusantara</h1>
    <h2 class="text-center">MART</h2>

    <h2 class="mb-4">NERACA</h2>

    <form action="<?= BASEURL; ?>/laba/tambah" method="post">

        <div class="mb-3 row">
            <label for="beban_gaji" class=" col-sm-4 form-label">Beban Gaji</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="beban_gaji" name="beban_gaji" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="beban_kebersih" class=" col-sm-4 form-label">Beban Bersih</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="beban_kebersih" name="beban_kebersih" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="beban_bensin" class=" col-sm-4 form-label">Beban Bensin</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="beban_bensin" name="beban_bensin" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="beban_listrik" class=" col-sm-4 form-label">Beban Listrik</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="beban_listrik" name="beban_listrik" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="beban_sewa" class=" col-sm-4 form-label">Beban Sewa</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="beban_sewa" name="beban_sewa" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="beban_hp" class=" col-sm-4 form-label">Beban HP</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="beban_hp" name="beban_hp" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penyusutan_kulkas" class=" col-sm-4 form-label">Penyusutan Kulkas</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="penyusutan_kulkas" name="penyusutan_kulkas" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penyusutan_kulkas_kantor" class=" col-sm-4 form-label">Penyusutan Kulkas Kantor</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="penyusutan_kulkas_kantor" name="penyusutan_kulkas_kantor" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penyusutan_peralatan" class=" col-sm-4 form-label">Penyusutan Peralatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="penyusutan_peralatan" name="penyusutan_peralatan" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penyusutan_rak" class=" col-sm-4 form-label">Penyusutan Rak</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="penyusutan_rak" name="penyusutan_rak" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total_beban" class=" col-sm-4 form-label">Total Beban</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="total_beban" name="total_beban" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total_laba" class=" col-sm-4 form-label">Total Laba</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="total_laba" name="total_laba" autocomplete="off">
            </div>
        </div>

        <input type="hidden" name="idKotor" id="idKotor">
        <div class="col-auto mt-4">
            <button type="submit" class="btn btn-primary mb-3" name="laba">Simpan</button>
        </div>
    </form>
</div>