<?php


class HomeController extends Controller
{
    public function index()
    {
        $this->view('partials/head');
        $this->view('index');
        $this->view('partials/footer');
    }
}
