<div class="table-neraca container">
    <div class="row mt-4">
        <div class="col-md-5">
            <h3>Laporan pada <?= $formatIndo = date('d F Y', strtotime($data['tanggalNeraca'])); ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <table class="table mt-5 table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">DATA NERACA</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Kasir</th>
                        <td> <?= $data['kasir']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Bank</th>
                        <td>RP. <?= $data['bank']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Brankas</th>
                        <td>RP. <?= $data['brankas']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Piutang</th>
                        <td>RP. <?= $data['piutang']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Stok</th>
                        <td>RP. <?= $data['stok']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Sewa</th>
                        <td>RP. <?= $data['sewa']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Akumulasi Sewa</th>
                        <td>RP. <?= $data['akumulasi_sewa']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Komp</th>
                        <td>RP. <?= $data['komp']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Akumulasi Komp</th>
                        <td>RP. <?= $data['akumulasi_komp']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Kulkas</th>
                        <td>RP. <?= $data['kulkas']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Akumulasi Kulkas</th>
                        <td>RP. <?= $data['akumulasi_kulkas']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Hp</th>
                        <td>RP. <?= $data['hp']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Akumulasi hp</th>
                        <td>RP. <?= $data['akumulasi_hp']; ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="col-md-5">
            <table class="table mt-5 table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">DATA MODAL</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Modal Dana</th>
                        <td>Rp. <?= $data['modal_dana']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Hutang</th>
                        <td>Rp. <?= $data['hutang']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Penambahan Modal</th>
                        <td>Rp. <?= $data['penambahan_modal']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Rugi Tahun</th>
                        <td>Rp. <?= $data['rugi_tahun']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Total Aktiva</th>
                        <td>Rp. <?= $data['total_aktiva']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>