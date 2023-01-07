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
}
