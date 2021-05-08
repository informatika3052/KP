<?php

class Modal_model
{
    private $table = 'neraca';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getIdNeraca()
    {
        $this->db->query('SELECT * FROM `neraca` ORDER BY id_neceraca DESC LIMIT 1');
        return $this->db->single();
    }

    public function tambahDataModal($data)
    {
        session_start();
        $idNeraca = $_SESSION['id_neceraca'];

        $query = "INSERT INTO modal VALUES (
            '',:id_neraca,:modal_dana,:hutang,:penambahan_modal,:rugi_tahun,:total_aktiva)";

        $this->db->query($query);
        $this->db->bind('id_neraca', $idNeraca);
        $this->db->bind('modal_dana', $data['modal_dana']);
        $this->db->bind('hutang', $data['hutang']);
        $this->db->bind('penambahan_modal', $data['penambahan_modal']);
        $this->db->bind('rugi_tahun', $data['rugi_tahun']);
        $this->db->bind('total_aktiva', $data['total_aktiva']);

        $this->db->execute();
        return  $this->db->rowCount();
    }
}
