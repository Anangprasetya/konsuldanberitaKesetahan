<?php


class Auth extends Controller
{
    private $adminModel;

    public function __construct()
    {
        $this->adminModel = $this->model('AdminModel');
    }

    public function proses_login()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST)) {
                $r = $this->adminModel->checkLogin($_POST);
                if ($r) {
                    header('Location: ' . BASEURL);
                } else {
                    echo "<script> alert('username atau password salah'); </script>";
                }
            }
        } else {
            header('location: ' . BASEURL);
        }
    }

    public function proses_logout()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_SESSION)) {
                session_unset();
                session_destroy();
                header('location: ' . BASEURL);
            }
        } else {
            header('location: ' . BASEURL);
        }
    }
}
