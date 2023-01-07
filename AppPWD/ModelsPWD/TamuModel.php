<?php

class TamuModel
{
    private $table = 'buku_tamu';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $query = "SELECT * FROM $this->table";

        $this->db->query($query);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            return $x->fetch_all(MYSQLI_ASSOC);
        } else {
            return null;
        }
    }

    public function insert($var)
    {
        $nama = $var['nama'];
        $alamat = $var['alamat'];
        $datenow = date('Y-m-d H:i:s');


        $statement = "INSERT INTO $this->table values (null,'" . $nama . "','" . $alamat . "','" . $datenow . "')";

        $this->db->query($statement);
        $x = $this->db->execute();

        if ($x) {
            return true;
        }

        return false;
    }
}
