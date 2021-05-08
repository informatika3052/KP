<?php

class Neraca_model
{
    private $table = 'neraca';
    private $tablee = 'pegawai';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // fungsi untuk request ke database 
    //  mencocokkan inputan user dengan data di database berdasarkan passowrd user
    public function getUserById($pass)
    {
        $this->db->query('SELECT * FROM ' . $this->tablee . ' WHERE pass=:pass');

        $this->db->bind('pass', $pass['pass']);

        return $this->db->single();
    }

    // fungsi untuk insert data dari inputan user untuk selanjutnya di kirim ke database
    public function tambahDataNeraca($data)
    {
        session_start();
        $userId = $_SESSION['idPegawai'];

        $query = "INSERT INTO neraca VALUES (
            '',:idPegawaiiii,:kasir,:bank,:brankas,:piutang,:stok,:sewa,:akumulasi_sewa,:komp,:akumulasi_komp,:kulkas,:akumulasi_kulkas,:kulkas_kantor,:akumulasi_kulkas_kantor,:hp,:akumulasi_hp)";

        $this->db->query($query);
        $this->db->bind('idPegawaiiii', $userId);
        $this->db->bind('kasir', $data['kasir']);
        $this->db->bind('bank', $data['bank']);
        $this->db->bind('brankas', $data['brankas']);
        $this->db->bind('piutang', $data['piutang']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('sewa', $data['sewa']);
        $this->db->bind('akumulasi_sewa', $data['akumulasi_sewa']);
        $this->db->bind('komp', $data['komp']);
        $this->db->bind('akumulasi_komp', $data['akumulasi_komp']);
        $this->db->bind('kulkas', $data['kulkas']);
        $this->db->bind('akumulasi_kulkas', $data['akumulasi_kulkas']);
        $this->db->bind('kulkas_kantor', $data['kulkas_kantor']);
        $this->db->bind('akumulasi_kulkas_kantor', $data['akumulasi_kulkas_kantor']);
        $this->db->bind('hp', $data['hp']);
        $this->db->bind('akumulasi_hp', $data['akumulasi_hp']);

        var_dump($_POST);
        $this->db->execute();

        return  $this->db->rowCount();
    }
}
