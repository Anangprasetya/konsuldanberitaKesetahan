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
}
