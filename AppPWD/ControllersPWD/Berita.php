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
}
