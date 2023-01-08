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

    public function insert($var)
    {
        $judul = $var['judul'];
        $isi = $var['isi'];
        $slug = $this->db->textToSlug($judul);

        $folder = "../ResourcesPWD/assets/img/berita/";
        $nama_file = $var['foto']['name'];
        $ukuran_file = $var['foto']['size'];
        $tmp_file = $var['foto']['tmp_name'];

        $datenow = date('Y-m-d H:i:s');

        move_uploaded_file($tmp_file, $folder . $nama_file);

        $statement = "INSERT INTO $this->table VALUES (null,'" . $judul . "','" . $isi . "','" . $folder . $nama_file . "','" . $datenow . "', '" . $slug . "')";

        $this->db->query($statement);
        $x = $this->db->execute();

        if ($x) {
            return true;
        }

        return false;
    }

    public function delete($var)
    {
        $slug = $var["berita"];
        $statement = "SELECT * FROM $this->table where slug_berita = '$slug'";

        $this->db->query($statement);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            $y = $x->fetch_array(MYSQLI_ASSOC);
            if (file_exists($y['gambar_berita'])) {
                unlink($y['gambar_berita']);
            }

            $statement = "DELETE FROM $this->table where slug_berita = '$slug'";

            $this->db->query($statement);
            $x = $this->db->execute();

            if ($x) {
                return true;
            }
        }

        return false;
    }

    public function edit($var)
    {
        print_r($var);
        $judul = $var["judul"];
        $isi = $var["isi"];
        $locimage = "";


        $statement = "SELECT * FROM $this->table where slug_berita = '" . $var['slug'] . "'";
        $this->db->query($statement);
        $x = $this->db->execute();
        $y = $x->fetch_array(MYSQLI_ASSOC);

        $locimage = $y["gambar_berita"];

        if ($var["foto"]["error"] == 4) {
        } else {
            $folder = "../ResourcesPWD/assets/img/berita/";
            $nama_file = $var['foto']['name'];
            $ukuran_file = $var['foto']['size'];
            $tmp_file = $var['foto']['tmp_name'];

            move_uploaded_file($tmp_file, $folder . $nama_file);

            if (file_exists($locimage)) {
                unlink($locimage);
            }

            $locimage = $folder . $nama_file;
        }


        $statement = "UPDATE $this->table SET judul_berita = '" . $judul . "', isi_berita = '" . $isi . "', gambar_berita = '" . $locimage . "' where slug_berita= '" . $var['slug'] . "'";

        $this->db->query($statement);
        $x = $this->db->execute();

        if ($x) {
            return true;
        }

        return false;
    }

    public function search($var)
    {
        $query = "SELECT * FROM $this->table WHERE judul_berita LIKE '%" . $var['key'] . "%'";

        // print_r($query);

        $this->db->query($query);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            $y = $x->fetch_all(MYSQLI_ASSOC);
            return $y;
        }

        return null;
    }
}
