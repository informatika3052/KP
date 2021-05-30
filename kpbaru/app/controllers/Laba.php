<?php

//  Class yang dibuat untuk menghubungkan antara database dan view 
// Tempat untuk pemanggilan view dan model
class Laba extends Controller
{
    // fungsi yang dipanggil ketika  user masuk ke halaman Laba
    public function index()
    {
        if (!isset($_SESSION["login"])) {
            header('Location: ' . BASEURL . '/home/login');
            exit;
        }
        $data['judul'] = 'Laba';
        $dataModal = $this->model('Laba_model')->getIdKotor();

        $_SESSION['idKotor'] = $dataModal['idKotor'];
        // var_dump($_SESSION['idKotor']);
        $data['judul'] = 'Laba';
        $this->view('templates/header', $data);
        $this->view('laba/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if (isset($_POST["laba"])) {


            $_POST['beban_gaji'] = preg_replace("/[^0-9]/", "", $_POST['beban_gaji']);
            $_POST['beban_kebersih'] = preg_replace("/[^0-9]/", "", $_POST['beban_kebersih']);
            $_POST['beban_bensin'] = preg_replace("/[^0-9]/", "", $_POST['beban_bensin']);
            $_POST['beban_listrik'] = preg_replace("/[^0-9]/", "", $_POST['beban_listrik']);
            $_POST['beban_sewa'] = preg_replace("/[^0-9]/", "", $_POST['beban_sewa']);
            $_POST['beban_hp'] = preg_replace("/[^0-9]/", "", $_POST['beban_hp']);
            $_POST['penyusutan_kulkas'] = preg_replace("/[^0-9]/", "", $_POST['penyusutan_kulkas']);
            $_POST['penyusutan_kulkas_kantor'] = preg_replace("/[^0-9]/", "", $_POST['penyusutan_kulkas_kantor']);
            $_POST['penyusutan_peralatan'] = preg_replace("/[^0-9]/", "", $_POST['penyusutan_peralatan']);
            $_POST['penyusutan_rak'] = preg_replace("/[^0-9]/", "", $_POST['penyusutan_rak']);
            $_POST['total_beban'] = preg_replace("/[^0-9]/", "", $_POST['total_beban']);
            $_POST['total_laba'] = preg_replace("/[^0-9]/", "", $_POST['total_laba']);


            $data =  $this->model('Laba_model')->tambahDataLaba($_POST);
            if ($data > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/home/searchData');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/modal');
                exit;
            }
        }
    }
}
