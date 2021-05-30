<?php



class DashboardAnggota_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataNeracaModal($tanggalNeraca)
    {
        $binding1 = $tanggalNeraca['tanggalNeraca'];

        // SELECT * FROM neraca JOIN modal ON neraca.id_neceraca = modal.id_neraca WHERE neraca.tanggalNeraca LIKE '%2021-05-29%';
        $this->db->query(' SELECT * FROM neraca JOIN modal ON neraca.id_neceraca = modal.id_neraca WHERE neraca.tanggalNeraca LIKE :tanggalNeraca');
        // $this->db->query('SELECT * FROM neraca WHERE tanggalNeraca LIKE :tanggalNeraca');


        $hasilLike = "%$binding1%";
        $this->db->bind(':tanggalNeraca', $hasilLike);
        return $this->db->single();
    }

    public function getDataKotorLabRugi($tanggalNeraca)
    {
        $binding1 = $tanggalNeraca['tanggalNeraca'];
        $this->db->query(' SELECT * FROM kotor JOIN labarugi ON kotor.idKotor = labarugi.idKotorr WHERE kotor.tanggalKotor LIKE :tanggalKotor');

        $hasilLike = "%$binding1%";
        $this->db->bind(':tanggalKotor', $hasilLike);
        return $this->db->single();
    }
}
