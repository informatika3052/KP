<?php

class Neraca extends Controller
{

    // fungsi yang dipanggil ketika  user masuk ke halaman Neraca
    public function index()
    {

        if (!isset($_SESSION["login"])) {
            header('Location: ' . BASEURL . '/home/login');
            exit;
        }
        $data['judul'] = 'Neraca';
        $this->view('templates/header', $data);
        $this->view('neraca/index', $data);
        $this->view('templates/footer');
    }
    // fungsi yang digunakan untuk menambah data neraca
    public function tambah()
    {

        if (isset($_POST["neraca"])) {

            // $_POST['kasir'] = preg_replace("/[^0-9]/", "", $_POST['kasir']);
            $_POST['bank'] = preg_replace("/[^0-9]/", "", $_POST['bank']);
            $_POST['brankas'] = preg_replace("/[^0-9]/", "", $_POST['brankas']);
            $_POST['piutang'] = preg_replace("/[^0-9]/", "", $_POST['piutang']);
            $_POST['stok'] = preg_replace("/[^0-9]/", "", $_POST['stok']);
            $_POST['sewa'] = preg_replace("/[^0-9]/", "", $_POST['sewa']);
            $_POST['akumulasi_sewa'] = preg_replace("/[^0-9]/", "", $_POST['akumulasi_sewa']);
            $_POST['komp'] = preg_replace("/[^0-9]/", "", $_POST['komp']);
            $_POST['akumulasi_komp'] = preg_replace("/[^0-9]/", "", $_POST['akumulasi_komp']);
            $_POST['kulkas'] = preg_replace("/[^0-9]/", "", $_POST['kulkas']);
            $_POST['akumulasi_kulkas'] = preg_replace("/[^0-9]/", "", $_POST['akumulasi_kulkas']);
            $_POST['kulkas_kantor'] = preg_replace("/[^0-9]/", "", $_POST['kulkas_kantor']);
            $_POST['akumulasi_kulkas_kantor'] = preg_replace("/[^0-9]/", "", $_POST['akumulasi_kulkas_kantor']);
            $_POST['hp'] = preg_replace("/[^0-9]/", "", $_POST['hp']);
            $_POST['akumulasi_hp'] = preg_replace("/[^0-9]/", "", $_POST['akumulasi_hp']);
            // $_POST['tanggalNeraca'] = strtotime($_POST['tanggalNeraca']);


            // var_dump($_POST['tanggalNeraca']);
            // var_dump($_POST);


            $data =  $this->model('Neraca_Model')->tambahDataNeraca($_POST);
            if ($data > 0) {
                // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/modal');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/neraca');
                exit;
            }
        }
    }
}
