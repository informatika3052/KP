<div class="table-neraca container">
    <div class="row mt-4">
        <div class="col-md-5">
            <h3>Laporan pada <?= $formatIndo = date('d F Y', strtotime($data['tanggalKotor'])); ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <table class="table mt-5 table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">DATA LABA RUGI</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Piutang</th>
                        <td>RP. <?= $data['beban_gaji']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Stok</th>
                        <td>RP. <?= $data['beban_kebersih']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Sewa</th>
                        <td>RP. <?= $data['beban_bensin']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Akumulasi Sewa</th>
                        <td>RP. <?= $data['beban_listrik']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Komp</th>
                        <td>RP. <?= $data['beban_sewa']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Akumulasi Komp</th>
                        <td>RP. <?= $data['beban_hp']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Kulkas</th>
                        <td>RP. <?= $data['penyusutan_kulkas']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Akumulasi Kulkas</th>
                        <td>RP. <?= $data['penyusutan_kulkas_kantor']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Hp</th>
                        <td>RP. <?= $data['penyusutan_peralatan']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Akumulasi hp</th>
                        <td>RP. <?= $data['penyusutan_rak']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Modal Dana</th>
                        <td>Rp. <?= $data['total_beban']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Hutang</th>
                        <td>Rp. <?= $data['total_laba']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <table class="table mt-5 table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">DATA KOTOR</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Kasir</th>
                        <td> <?= $data['pendapat']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Bank</th>
                        <td>RP. <?= $data['biayaPendapat']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Brankas</th>
                        <td>RP. <?= $data['total']; ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>