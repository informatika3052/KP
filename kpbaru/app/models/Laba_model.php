<?php

class Laba_model
{
    private $table = 'neraca';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getIdKotor()
    {
        $this->db->query('SELECT * FROM `kotor` ORDER BY idKotor DESC LIMIT 1');
        return $this->db->single();
    }
    public function tambahDataLaba($data)
    {
        session_start();
        $idKotor = $_SESSION['idKotor'];

        $query = "INSERT INTO labarugi VALUES (
            '',:idKotorr,:beban_gaji,:beban_kebersih,:beban_bensin,:beban_listrik,:beban_sewa,:beban_hp,:penyusutan_kulkas,:penyusutan_kulkas_kantor,:penyusutan_peralatan,:penyusutan_rak,:total_beban,:total_laba)";

        $this->db->query($query);
        $this->db->bind('idKotorr', $idKotor);
        $this->db->bind('beban_gaji', $data['beban_gaji']);
        $this->db->bind('beban_kebersih', $data['beban_kebersih']);
        $this->db->bind('beban_bensin', $data['beban_bensin']);
        $this->db->bind('beban_listrik', $data['beban_listrik']);
        $this->db->bind('beban_sewa', $data['beban_sewa']);
        $this->db->bind('beban_hp', $data['beban_hp']);
        $this->db->bind('penyusutan_kulkas', $data['penyusutan_kulkas']);
        $this->db->bind('penyusutan_kulkas_kantor', $data['penyusutan_kulkas_kantor']);
        $this->db->bind('penyusutan_peralatan', $data['penyusutan_peralatan']);
        $this->db->bind('penyusutan_rak', $data['penyusutan_rak']);
        $this->db->bind('total_beban', $data['total_beban']);
        $this->db->bind('total_laba', $data['total_laba']);


        $this->db->execute();
        return  $this->db->rowCount();
    }
}
