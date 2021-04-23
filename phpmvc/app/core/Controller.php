<?php

class Controller
{

    // method view yang berisi 2 parameter 
    // param pertama nama view nya 
    // param kedua berisi data jika ada data yang dikirimkan
    public function view($view, $data = [])
    {
        // kita panggil view yang berada pada folder view , kita anggap kita berada di posisi index.php di folder public
        require_once '../app/views/' . $view . '.php';
    }
    public function model($model)
    {

        require_once '../app/models/' . $model . '.php';

        // instansiasi model
        return new $model;
    }
}
