<?php

class AdminModel
{
    private $table = 'admin';
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
        $query = "SELECT * FROM $this->table WHERE id_admin = '$var'";

        $this->db->query($query);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            return $x->fetch_array(MYSQLI_ASSOC);
        } else {
            return null;
        }
    }

    public function checkLogin($var)
    {
        $username = $var['username'];
        $password = $var['password'];

        if ($username != "" && $password != "") {
            $query = "SELECT * FROM $this->table WHERE username='$username' AND password='$password'";

            $this->db->query($query);
            $x = $this->db->execute();

            if ($x->num_rows > 0) {
                $y = $x->fetch_array(MYSQLI_ASSOC);
                $_SESSION['username'] = $y["username"];
                return true;
            } else {
                return false;
            }
        }

        return false;
    }


    public function insert($var)
    {
        $nama =     $var['nama'];
        $username = $var['username'];
        $password = $var['password'];
        $jabatan = $var['jabatan'];

        $folder = "../ResourcesPWD/assets/img/admin/";
        $nama_file = $var['foto']['name'];
        $ukuran_file = $var['foto']['size'];
        $tmp_file = $var['foto']['tmp_name'];

        move_uploaded_file($tmp_file, $folder . $nama_file);

        $statement = "INSERT INTO $this->table VALUES (null,'" . $nama . "','" . $username . "','" . $password . "','" . $jabatan . "','" . $folder . $nama_file . "')";

        $this->db->query($statement);
        $x = $this->db->execute();

        if ($x) {
            return true;
        }

        return false;
    }


    public function delete($var)
    {
        $id = $var["id"];
        $statement = "SELECT * FROM $this->table where id_admin = '$id'";

        $this->db->query($statement);
        $x = $this->db->execute();

        if ($x->num_rows > 0) {
            $y = $x->fetch_array(MYSQLI_ASSOC);
            if (file_exists($y['foto_admin'])) {
                unlink($y['foto_admin']);
            }

            $statement = "DELETE FROM $this->table where id_admin = '$id'";

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
        $id_admin = $var['id'];
        $nama =     $var['nama'];
        $username = $var['username'];
        $password = $var['password'];
        $jabatan = $var['jabatan'];

        $statement = "SELECT * FROM $this->table where id_admin = '" . $id_admin . "'";
        $this->db->query($statement);
        $x = $this->db->execute();
        $y = $x->fetch_array(MYSQLI_ASSOC);

        $locimage = $y["foto_admin"];

        if ($var["foto"]["error"] == 4) {
        } else {
            $folder = "../ResourcesPWD/assets/img/admin/";
            $nama_file = $var['foto']['name'];
            $ukuran_file = $var['foto']['size'];
            $tmp_file = $var['foto']['tmp_name'];

            move_uploaded_file($tmp_file, $folder . $nama_file);

            if (file_exists($locimage)) {
                unlink($locimage);
            }

            $locimage = $folder . $nama_file;
        }


        $statement = "UPDATE $this->table SET nama_admin = '" . $nama . "', username = '" . $username . "', password = '" . $password . "', jabatan_admin = '" . $jabatan . "', foto_admin = '" . $locimage . "' WHERE id_admin=" . $id_admin;

        $this->db->query($statement);
        $x = $this->db->execute();

        if ($x) {
            return true;
        }

        return false;
    }
}
