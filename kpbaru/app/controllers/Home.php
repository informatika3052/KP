<?php

//  Class yang dibuat untuk menghubungkan antara database dan view 
// Tempat untuk pemanggilan view dan model

class Home extends Controller
{
    // fungsi yang dipanggil ketika halaman pertama kali di load
    public function index()
    {

        $data['judul'] = 'Dashboard';
        // $this->view('templates/header', $data);
        $this->view('home/dashboard', $data);
        $this->view('templates/footer');
    }

    // fungsi yang dipanggil ketika user berhasil LOGIN
    public function dashboardAnggota()
    {
        $data['judul'] = 'Data Dashboard';
        $this->view('templates/header', $data);
        $this->view('home/searchData');
        if (isset($_POST['caridata'])) {
            if ($_POST['tanggalNeraca'] == "") {
                echo "<div class='container mt-5'><h3>Data yang anda cari tidak ditemukan</h3></div>";
            } else if ($_POST['flexRadioDefault'] == 1) {
                $data = $this->model('DashboardAnggota_model')->getDataNeracaModal($_POST);
                if ($data > 0) {
                    $this->view('home/dashboardAnggotaNeraca', $data);
                    $this->view('templates/footer');
                    exit;
                } else {
                    $_SESSION['erorr'] =  "<div class='container mt-5'><h3>Data yang anda cari tidak ditemukan</h3></div>";
                    header('Location: ' . BASEURL . '/home/dashboardAnggota');
                    exit;
                }
            } else if ($_POST['flexRadioDefault'] == 2) {
                $data = $this->model('DashboardAnggota_model')->getDataKotorLabRugi($_POST);
                if ($data > 0) {
                    $this->view('home/dashboardKotor', $data);
                    $this->view('templates/footer');
                    exit;
                } else {
                    header('Location: ' . BASEURL . '/home/dashboardAnggota');
                    exit;
                }
            } else {
                header('Location: ' . BASEURL . '/home/dashboardAnggota');
            }
        } else {
            exit;
        }
    }
    // public function dashboardAnggota()
    // {
    //     $data['judul'] = 'Data Dashboard';
    //     $this->view('templates/header', $data);
    //     $this->view('home/searchData');

    //     if (isset($_SESSION['data2'])) {

    //         $data = $_SESSION['data2'];
    //         $this->view('home/dashboardKotor', $data);
    //         $this->view('templates/footer');
    //         exit;
    //     } else if (isset($_SESSION['data1'])) {
    //         // var_dump($data = $_SESSION['data']);
    //         $data = $_SESSION['data1'];
    //         $this->view('home/dashboardAnggotaNeraca', $data);
    //         $this->view('templates/footer');
    //         exit;
    //     }
    // }

    // public function searchData()
    // {
    //     if (isset($_POST['caridata'])) {
    //         if ($_POST['tanggalNeraca'] == "") {
    //             echo "<div class='container mt-5'><h3>Data yang anda cari tidak ditemukan</h3></div>";
    //         } else if ($_POST['flexRadioDefault'] == 1) {
    //             var_dump($_POST['flexRadioDefault']);
    //             var_dump($_POST['tanggalNeraca']);
    //             $data = $this->model('DashboardAnggota_model')->getDataNeracaModal($_POST);
    //             if ($data > 0) {
    //                 var_dump($data);
    //                 // session_start();
    //                 $_SESSION['data1'] = $data;
    //                 header('Location: ' . BASEURL . '/home/dashboardAnggota');
    //                 exit;
    //             } else {
    //                 $_SESSION['erorr'] =  "<div class='container mt-5'><h3>Data yang anda cari tidak ditemukan</h3></div>";
    //                 header('Location: ' . BASEURL . '/home/dashboardAnggota');
    //                 exit;
    //             }
    //         } else if ($_POST['flexRadioDefault'] == 2) {
    //             var_dump($_POST['flexRadioDefault']);
    //             var_dump($_POST['tanggalNeraca']);
    //             $data = $this->model('DashboardAnggota_model')->getDataKotorLabRugi($_POST);
    //             if ($data > 0) {
    //                 // session_start();
    //                 var_dump($data);
    //                 $_SESSION['data2'] = $data;
    //                 header('Location: ' . BASEURL . '/home/dashboardAnggota');
    //                 exit;
    //             } else {
    //                 $_SESSION['erorr'] =  "<div class='container mt-5'><h3>Data yang anda cari tidak ditemukan</h3></div>";
    //                 header('Location: ' . BASEURL . '/home/dashboardAnggota');
    //                 exit;
    //             }
    //         } else {
    //             header('Location: ' . BASEURL . '/home/dashboardAnggota');
    //         }
    //     } else {

    //         exit;
    //     }
    // }
    public function login()
    {
        // Pengisian title halaman di html
        $data['judul'] = 'Login';
        $this->view('home/login', $data);
        if (isset($_POST["login"])) {

            $data = $this->model('Neraca_model')->getUserById($_POST);
            if ($data > 0) {
                $_SESSION['idPegawai'] = $data['idPegawai'];
                $_SESSION["login"] = true;
                header('Location: ' . BASEURL . '/home/dashboardAnggota');
                exit;
            } else {
                header('Location: ' . BASEURL . '/home/login');
                exit;
            }
        }
    }

    // fungsi yang dipanggil ketika user berhasil LOGOUT
    public function logout()
    {
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();

        header('Location: ' . BASEURL . '/home/dashboard');
        exit;
    }
}

// php print_r(getdate()); 