<?php

class Laba extends Controller
{

    public function index()
    {

        $data['judul'] = 'Laba';
        $this->view('templates/header', $data);
        $this->view('laba/index', $data);
        $this->view('templates/footer');
    }
}
