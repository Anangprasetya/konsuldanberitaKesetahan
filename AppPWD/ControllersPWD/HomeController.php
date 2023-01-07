<?php


class HomeController extends Controller
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
        $this->view('index', $data);
        $this->view('partials/footer');
    }

    public function about()
    {
        $this->view('partials/head');
        $this->view('profile');
        $this->view('partials/footer');
    }
}