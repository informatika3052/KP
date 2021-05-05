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

        $this->view('home/index');
        if (isset($_POST["login"])) {
            var_dump($_POST);
            // header('Location: ' . BASEURL . '/home/dashboard');
            if ($this->model('Neraca_model')->getUserById($_POST) > 0) {

                $_SESSION["login"] = true;

                header('Location: ' . BASEURL . '/home/dashboard');
                // header('Location: ' . BASEURL . '/home/index');
                exit;
            } else {

                // header('Location: ' . BASEURL . '/home/dashboard');
                header('Location: ' . BASEURL . '/home/index');
                exit;
            }
        }
    }
    public function dashboard()
    {
        $data['judul'] = 'Dashboiard';
        $data['idPegawaiiii'] = $this->model('Neraca_model')->getUserById();
        // $data = $this->model('Neraca_model')->getUserById();

        // // session_start();

        if (!isset($_SESSION["login"])) {
            header("Location: login.php");
            exit;
        }
        var_dump($_POST);
        var_dump($_SESSION);
        // var_dump($_SESSION);

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
