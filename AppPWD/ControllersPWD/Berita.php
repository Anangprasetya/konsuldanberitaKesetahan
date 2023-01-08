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
                header('location: ' . BASEURL) . 'berita';
            }
        } else {
            header('location: ' . BASEURL . 'berita');
        }
    }


    public function hapusBerita()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST)) {
                $r = $this->beritaModel->delete($_POST);
            }
        }
        header('location: ' . BASEURL . 'berita');
    }

    public function editBerita($var)
    {
        $data["berita"] = $this->beritaModel->getFind($var);

        $this->view('partials/head');
        $this->view('berita/edit', $data);
        $this->view('partials/footer');
    }

    public function prosesEditBerita()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $r = $this->beritaModel->edit(array_merge($_POST, $_FILES));
            if ($r) {
                header('location: ' . BASEURL . 'berita');
            }
            // print_r($_POST);
            // print_r($_FILES);
        }

        header('location: ' . BASEURL . 'berita');
    }
}
