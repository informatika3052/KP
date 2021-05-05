<?php

class Modal extends Controller
{

    public function index()
    {

        $data['judul'] = 'Modal';
        $this->view('templates/header', $data);
        $this->view('modal/index', $data);
        $this->view('templates/footer');
    }
}
