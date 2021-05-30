<?php

// Database handler
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh, $statement;

    public function __construct()
    {
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        // data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
        // var_dump($dsn);
        try {

            $this->dbh =  new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDO $e) {
            die($e->errorCode());
        }
    }

    // public function lastInsertId()
    // {
    //     return $this->dbh->lastInsertId();
    // }
    // fungsi yang digunakan untuk menampung data sementara untuk selanjut nya di binding
    public function query($query)
    {
        $this->statement = $this->dbh->prepare($query);
    }

    //  fungsi untuk memfilter data hasil query
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        // Berguna untuk membersihkan string sebelum menjadi query
        $this->statement->bindValue($param, $value, $type);
    }

    //  fungsi yang digunakan untuk mengeksekusi data 
    public function execute()
    {
        $this->statement->execute();
    }

    // Digunakan unrtuk mengambil banyak data
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Digunakan unrtuk mengambil satu data
    public function single()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    // fungsi yang digunakan untuk menambah baris baru setelah data ditambahkan 
    public function rowCount()
    {
        return $this->statement->rowCount();
    }
}
