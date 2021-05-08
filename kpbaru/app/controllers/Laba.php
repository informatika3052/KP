<?php



//  Class yang dibuat untuk menghubungkan antara database dan view 
// Tempat untuk pemanggilan view dan model
class Laba extends Controller
{
    // fungsi yang dipanggil ketika  user masuk ke halaman Laba
    public function index()
    {

        $data['judul'] = 'Laba';
        $this->view('templates/header', $data);
        $this->view('laba/index', $data);
        $this->view('templates/footer');
    }
}
