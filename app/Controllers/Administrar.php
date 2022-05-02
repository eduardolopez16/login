<?php namespace App\Controllers;

class Administrar extends BaseController
{
    public function index()
    {
        $data = [];
        echo view('templates/header', $data);
        echo view('administrar');
        echo view('templates/footer');
    }
}
