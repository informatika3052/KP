<?php

//  Class yang dibuat untuk menghubungkan antara database dan view 
// Tempat untuk pemanggilan view dan model

class Home extends Controller
{
    // fungsi yang dipanggil ketika halaman pertama kali di load
    public function index()
    {
        // Pengisian title halaman di html
        $data['judul'] = 'Login';
        $this->view('home/index', $data);
        if (isset($_POST["login"])) {

            $data = $this->model('Neraca_model')->getUserById($_POST);
            if ($data > 0) {
                $this->model('Neraca_model')->getUserById($_POST);
                $_SESSION['idPegawai'] = $data['idPegawai'];
                $_SESSION["login"] = true;

                header('Location: ' . BASEURL . '/home/dashboard');
                exit;
            } else {
                header('Location: ' . BASEURL . '/home/index');
                exit;
            }
        }
    }

    // fungsi yang dipanggil ketika user berhasil LOGIN
    public function dashboard()
    {

        if (!isset($_SESSION["login"])) {
            header("Location: login.php");
            exit;
        }
        $data['judul'] = 'Dashboard';
        $this->view('templates/header', $data);
        $this->view('home/dashboard');
        $this->view('templates/footer');
    }

    // fungsi yang dipanggil ketika user berhasil LOGOUT
    public function logout()
    {
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();

        header('Location: ' . BASEURL . '/home/index');
        exit;
    }
}


//  var_dump($data['idPegawai']);
// $data = $this->model('Neraca_model')->getUserById($data);
// var_dump($data['idPegawai']);
// $_SESSION['idPegawai'] = $data['idPegawai'];
// $_SESSION["login"] = true;
