<?php


class Controller
{
    public function view($value, $data = [])
    {
        require_once '../ResourcesPWD/ViewsPWD/' . $value . '.php';
    }

    public function model($name)
    {
        require_once '../AppPWD/ModelsPWD/' . $name . '.php';
        return new $name;
    }
}
