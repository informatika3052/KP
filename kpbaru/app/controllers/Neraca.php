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
        if ($this->model('Neraca_Model')->tambahDataNeraca($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/home/dashboard');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/neraca');
            exit;
        }
    }
}
