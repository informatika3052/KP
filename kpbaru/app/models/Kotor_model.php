<?php

class Kotor_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    // fungsi untuk insert data dari inputan user untuk selanjutnya di kirim ke database
    public function tambahDataKotor($data)
    {
        session_start();
        $userId = $_SESSION['idPegawai'];

        $query = "INSERT INTO kotor VALUES (
            '',:idPegawaii,:pendapat,:biayaPendapat,:total,:tanggalKotor)";

        $this->db->query($query);
        $this->db->bind('idPegawaii', $userId);
        $this->db->bind('pendapat', $data['pendapat']);
        $this->db->bind('biayaPendapat', $data['biayaPendapat']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('tanggalKotor', $data['tanggalKotor']);

        $this->db->execute();

        return  $this->db->rowCount();
    }
}
