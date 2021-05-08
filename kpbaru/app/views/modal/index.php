<div class="neraca container">
    <h1 class="text-center">Berkah Medika Nusantara</h1>
    <h2 class="text-center">MART</h2>

    <h2 class="mb-4">MODAL</h2>

    <form action="<?= BASEURL; ?>/modal/tambah" method="post">

        <div class="mb-3 row">
            <label for="modal_dana" class=" col-sm-4 form-label">Modal Dana</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="modal_dana" name="modal_dana" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="hutang" class=" col-sm-4 form-label">Hutang</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="hutang" name="hutang" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penambahan_modal" class=" col-sm-4 form-label">Penambahan Modal</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="penambahan_modal" name="penambahan_modal" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="rugi_tahun" class=" col-sm-4 form-label">Rugi Tahun</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="rugi_tahun" name="rugi_tahun" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total_aktiva" class=" col-sm-4 form-label">Total Aktiva</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="total_aktiva" name="total_aktiva" autocomplete="off">
            </div>
        </div>
        <input type="hidden" name="id_modal" id="id_modal">
        <div class="col-auto mt-4">
            <button type="submit" class="btn btn-primary mb-3" name="modal">Simpan</button>
        </div>
    </form>
</div>