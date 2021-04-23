<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?= Flasher::flash(); ?>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <button type="button" class="btn btn-primary my-3 tambahDataMahasiswa" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama'] ?>
                        <div class="grup">
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"> <span class="badge bg-primary tampilDetail" data-bs-id="<?= $mhs['id']; ?>">Detail</span></a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge  bg-success tampilModalUbah " data-bs-toggle="modal" data-bs-target="#formModal" data-bs-id="<?= $mhs['id']; ?>">Ubah</a>

                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"><span class="badge bg-danger " onclick="return confirm('yakin');">Hapus</span></a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">Nrp</label>
                        <input type="number" class="form-control" id="nrp" name="nrp" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input class="form-control" list="datalistOptions" id="jurusan" name="jurusan">
                        <datalist id="datalistOptions">
                            <option value="Teknik Informatika">
                            <option value="Teknik Industri">
                            <option value="Teknik Pangan">
                            <option value="Teknik Listrik">
                            <option value="Teknik Elektro">
                        </datalist>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>