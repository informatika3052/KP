<div class="neraca container">
    <h1 class="text-center">Berkah Medika Nusantara</h1>
    <h2 class="text-center">MART</h2>

    <h2 class="mb-4">KOTOR</h2>

    <form action="<?= BASEURL; ?>/kotor/tambah" method="post">

        <div class="mb-3 row">
            <label for="pendapat" class=" col-sm-4 form-label">Pendapatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="pendapat" name="pendapat" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="biyaPendaapat" class=" col-sm-4 form-label">Biaya Pendapatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="biyaPendaapat" name="biyaPendaapat" autocomplete="off">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total" class=" col-sm-4 form-label">Total</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="total" name="total" autocomplete="off">
            </div>
        </div>
        <input type="hidden" name="idPegwaii" id="idPegwaiii">
        <div class="col-auto mt-4">
            <button type="submit" class="btn btn-primary mb-3" name="kotor">Simpan</button>
        </div>
    </form>
</div>