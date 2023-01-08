<?php

class Berita extends Controller
{
    private $beritaModel;

    public function __construct()
    {
        $this->beritaModel = $this->model('BeritaModel');
    }

    public function index()
    {
        $data["berita"] = $this->beritaModel->getAll();

        $this->view('partials/head');
        $this->view('berita/index', $data);
        $this->view('partials/footer');
    }

    public function detail($slug_berita)
    {
        $data["berita"] = $this->beritaModel->getFind($slug_berita);

        $this->view('partials/head');
        $this->view('berita/detail', $data);
        $this->view('partials/footer');
    }

    public function tambahBerita()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST) && isset($_FILES)) {
                $r = $this->beritaModel->insert(array_merge($_POST, $_FILES));
                if ($r) {
                    echo "<script> alert('Sukses menambah berita'); </script>";
                    header('location:' . BASEURL . 'berita');
                } else {
                    echo "<script> alert('Sukses menambah berita'); </script>";
                    header('location:' . BASEURL . 'berita');
                }
            } else {
                header('location: ' . BASEURL);
            }
        } else {
            header('location: ' . BASEURL);
        }
    }


    public function hapusBerita()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST)) {
                $r = $this->beritaModel->delete($_POST);
            }
            print_r($_POST);
        } else {
            header('location: ' . BASEURL);
        }
    }
}
