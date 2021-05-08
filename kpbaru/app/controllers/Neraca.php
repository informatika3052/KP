<?php

class Neraca extends Controller
{

    public function index()
    {
        $data['judul'] = 'Neraca';
        $this->view('templates/header', $data);
        $this->view('neraca/index', $data);
        $this->view('templates/footer');
    }
    // fungsi yang digunakan untuk menambah data mahasiswa
    public function tambah()
    {

        if (isset($_POST["neraca"])) {
            $data =  $this->model('Neraca_Model')->tambahDataNeraca($_POST);
            if ($data > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
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
