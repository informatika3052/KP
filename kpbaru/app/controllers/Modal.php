<?php



//  Class yang dibuat untuk menghubungkan antara database dan view 
// Tempat untuk pemanggilan view dan model
class Modal extends Controller
{
    // fungsi yang dipanggil ketika  user masuk ke halaman Modal
    public function index()
    {
        $data['judul'] = 'Modal';
        $dataModal = $this->model('Modal_model')->getIdNeraca();

        if (!isset($_SESSION)) {
            session_start();
            $_SESSION['id_neceraca'] = $dataModal['id_neceraca'];
            // var_dump($_SESSION['id_neceraca']);
        }
        $this->view('templates/header', $data);
        $this->view('modal/index');
        $this->view('templates/footer');
    }
    // fungsi yang digunakan untuk menambah data Modal
    public function tambah()
    {
        if (isset($_POST["modal"])) {
            $data =  $this->model('Modal_model')->tambahDataModal($_POST);
            if ($data > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/home/dashboard');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/modal');
                exit;
            }
        }
    }
}
