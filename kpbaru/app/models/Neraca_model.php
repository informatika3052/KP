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


    public function getUserById($pass)
    {
        $this->db->query('SELECT * FROM ' . $this->tablee . ' WHERE pass=:pass');

        $this->db->bind('pass', $pass['pass']);

        return $this->db->single();
    }

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
    // public function hapusDataMahasiswa($id)
    // {
    //     $query = "DELETE FROM mahasiswa WHERE id = :id";

    //     $this->db->query($query);
    //     $this->db->bind('id', $id);

    //     $this->db->execute();
    //     return  $this->db->rowCount();
    // }

    // public function ubahDataMahasiswa($data)
    // {
    //     $query = "UPDATE mahasiswa SET 
    //                 nama = :nama,
    //                 nrp = :nrp,
    //                 email = :email,
    //                 jurusan = :jurusan
    //               WHERE id = :id";

    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('nrp', $data['nrp']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('jurusan', $data['jurusan']);
    //     $this->db->bind('id', $data['id']);

    //     $this->db->execute();
    //     return  $this->db->rowCount();
    // }
    // public function getAllMahasiswa()
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table);
    //     return $this->db->resultSet();
    // }

    // public function getMahasiswaById($id)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    //     $this->db->bind('id', $id);
    //     return $this->db->single();
    // }
}
