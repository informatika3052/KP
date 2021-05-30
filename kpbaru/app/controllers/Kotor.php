<?php



//  Class yang dibuat untuk menghubungkan antara database dan view 
// Tempat untuk pemanggilan view dan model
class Kotor extends Controller
{
    // fungsi yang dipanggil ketika  user masuk ke halaman Kotor
    public function index()
    {

        if (!isset($_SESSION["login"])) {
            header('Location: ' . BASEURL . '/home/login');
            exit;
        }
        $data['judul'] = 'Kotor';
        $this->view('templates/header', $data);
        $this->view('kotor/index', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if (isset($_POST["kotor"])) {

            $_POST['pendapat'] = preg_replace("/[^0-9]/", "", $_POST['pendapat']);
            $_POST['biayaPendapat'] = preg_replace("/[^0-9]/", "", $_POST['biayaPendapat']);
            $_POST['total'] = preg_replace("/[^0-9]/", "", $_POST['total']);

            // var_dump($_POST);

            $data =  $this->model('Kotor_model')->tambahDataKotor($_POST);
            if ($data > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/home/searchData');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/neraca');
                exit;
            }
        }
    }
}
