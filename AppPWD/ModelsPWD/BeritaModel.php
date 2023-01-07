<?php

class BeritaModel
{
    private $table = 'berita';
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

    public function getFind($var)
    {
        $query = "SELECT * FROM $this->table WHERE slug_berita = '$var'";

        $this->db->query($query);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            return $x->fetch_array(MYSQLI_ASSOC);
        } else {
            return null;
        }
    }
}
