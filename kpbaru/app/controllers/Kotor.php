<?php

class Kotor extends Controller
{

    public function index()
    {

        $data['judul'] = 'Kotor';
        $this->view('templates/header', $data);
        $this->view('kotor/index', $data);
        $this->view('templates/footer');
    }
}
