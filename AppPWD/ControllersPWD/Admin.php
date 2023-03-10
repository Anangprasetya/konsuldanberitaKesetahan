<?php


class Admin extends Controller
{
    private $adminModel;

    public function __construct()
    {
        $this->adminModel = $this->model('AdminModel');
    }

    public function index()
    {
        $parsing["admin"] = $this->adminModel->getAll();

        $this->view('partials/head');
        $this->view('admin/index', $parsing);
        $this->view('partials/footer');
    }

    public function tambahAdmin()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST) && isset($_FILES)) {
                $r = $this->adminModel->insert(array_merge($_POST, $_FILES));
                if ($r) {
                    echo "<script> alert('Sukses menambah admin'); </script>";
                    header('location:' . BASEURL . 'admin');
                } else {
                    echo "<script> alert('Sukses menambah admin'); </script>";
                    header('location:' . BASEURL . 'admin');
                }
            } else {
                header('location: ' . BASEURL) . 'admin';
            }
        } else {
            header('location: ' . BASEURL . 'admin');
        }
    }

    public function hapusAdmin()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST)) {
                $r = $this->adminModel->delete($_POST);
            }
        }
        header('location: ' . BASEURL . 'admin');
    }


    public function edit($var)
    {
        $r = $this->adminModel->getFind($var);
        if ($r == null) {
            header('location: ' . BASEURL . 'admin');
        } else {
            $data["admin"] = $r;
            $this->view('partials/head');
            $this->view('admin/edit', $data);
            $this->view('partials/footer');
        }
    }

    public function editAdmin()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $r = $this->adminModel->edit(array_merge($_POST, $_FILES));
            if ($r) {
                header('location: ' . BASEURL . 'admin');
            }
        }

        header('location: ' . BASEURL . 'admin');
    }
}
