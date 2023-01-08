<?php


class Tamu extends Controller
{
    private $tamuModel;

    public function __construct()
    {
        $this->tamuModel = $this->model('TamuModel');
    }

    public function index()
    {
        $data["tamu"] = $this->tamuModel->getAll();

        $this->view('partials/head');
        $this->view('tamu/index', $data);
        $this->view('partials/footer');
    }

    public function proses_tambah()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $r = $this->tamuModel->insert($_POST);
            if ($r) {
                echo "<script> alert('Sukses menambah pengunjung'); </script>";
                header('location: ' . BASEURL . 'tamu');
            } else {
                echo "<script> alert('Gagal menambah pengunjung'); </script>";
                header('location: ' . BASEURL . 'tamu');
            }
        } else {
            header('location: ' . BASEURL . 'tamu');
        }
    }

    public function hapusTamu()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $r = $this->tamuModel->delete($_POST);
            if ($r) {
                echo "<script> alert('Sukses menghapus tamu'); </script>";
                header('location:' . BASEURL . 'tamu');
            } else {
                echo "<script> alert('Gagal menghapus tamu'); </script>";
                header('location:' . BASEURL . 'tamu');
            }
        }

        header('location: ' . BASEURL . 'tamu');
    }

    public function edit($var)
    {
        $r = $this->tamuModel->getFind($var);
        if ($r == null) {
            header('location:' . BASEURL . 'tamu');
        } else {
            $data["tamu"] = $r;

            $this->view('partials/head');
            $this->view('tamu/edit', $data);
            $this->view('partials/footer');
        }
    }

    public function prosesEdit()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $r = $this->tamuModel->edit($_POST);
            if ($r) {
                echo "<script> alert('Sukses edit tamu'); </script>";
                header('location:' . BASEURL . 'tamu');
            } else {
                echo "<script> alert('Gagal edit tamu'); </script>";
                header('location:' . BASEURL . 'tamu');
            }
        }

        header('location: ' . BASEURL . 'tamu');
    }
}
