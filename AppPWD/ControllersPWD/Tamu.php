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
}
