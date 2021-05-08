<?php



//  Class yang dibuat untuk menghubungkan antara database dan view 
// Tempat untuk pemanggilan view dan model
class Kotor extends Controller
{
    // fungsi yang dipanggil ketika  user masuk ke halaman Kotor
    public function index()
    {

        $data['judul'] = 'Kotor';
        $this->view('templates/header', $data);
        $this->view('kotor/index', $data);
        $this->view('templates/footer');
    }
}
