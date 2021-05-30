<?php



//  Class yang dibuat untuk menghubungkan antara database dan view 
// Tempat untuk pemanggilan view dan model
class Modal extends Controller
{
    // fungsi yang dipanggil ketika  user masuk ke halaman Modal
    public function index()
    {
        if (!isset($_SESSION["login"])) {
            header('Location: ' . BASEURL . '/home/login');
            exit;
        }
        $data['judul'] = 'Modal';
        $dataModal = $this->model('Modal_model')->getIdNeraca();

        $_SESSION['id_neceraca'] = $dataModal['id_neceraca'];
        $this->view('templates/header', $data);
        $this->view('modal/index');
        $this->view('templates/footer');
    }
    // fungsi yang digunakan untuk menambah data Modal
    public function tambah()
    {
        if (isset($_POST["modal"])) {

            $_POST['modal_dana'] = preg_replace("/[^0-9]/", "", $_POST['modal_dana']);
            $_POST['hutang'] = preg_replace("/[^0-9]/", "", $_POST['hutang']);
            $_POST['penambahan_modal'] = preg_replace("/[^0-9]/", "", $_POST['penambahan_modal']);
            $_POST['rugi_tahun'] = preg_replace("/[^0-9]/", "", $_POST['rugi_tahun']);
            $_POST['total_aktiva'] = preg_replace("/[^0-9]/", "", $_POST['total_aktiva']);


            $data =  $this->model('Modal_model')->tambahDataModal($_POST);
            if ($data > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/modal');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/modal');
                exit;
            }
        }
    }
}
