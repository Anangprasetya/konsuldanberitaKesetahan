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
}
