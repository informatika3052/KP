<?php
// if (isset($_SESSION['login'])) {
//     session_start();
//     header('Location: ' . BASEURL . '/home/index');
//     exit;
// }

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('home/index', $data);
        if (isset($_POST["login"])) {

            $data = $this->model('Neraca_model')->getUserById($_POST);
            if ($data > 0) {
                $this->model('Neraca_model')->getUserById($_POST);
                $_SESSION['idPegawai'] = $data['idPegawai'];
                $_SESSION["login"] = true;
                // var_dump($data['idPegawai']);
                // // $data = $this->model('Neraca_model')->getUserById($data);
                // // // var_dump($data['idPegawai']);
                // // $_SESSION['idPegawai'] = $data['idPegawai'];
                // // $_SESSION["login"] = true;

                header('Location: ' . BASEURL . '/home/dashboard');
                exit;
            } else {
                header('Location: ' . BASEURL . '/home/index');
                exit;
            }
        }
    }
    public function dashboard()
    {

        if (!isset($_SESSION["login"])) {
            header("Location: login.php");
            exit;
        }
        // session_start();
        // $oi =  $_SESSION['idPegawai'];
        // var_dump($oi);
        $data['judul'] = 'Dashboard';
        $this->view('templates/header', $data);
        $this->view('home/dashboard');
        $this->view('templates/footer');
    }
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
