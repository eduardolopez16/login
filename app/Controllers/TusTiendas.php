<?php namespace App\Controllers;

class TusTiendas extends BaseController
{
    public function index()
    {
        $data = [];
        echo view('templates/header', $data);
        echo view('tustiendas');
        echo view('templates/footer');
    }
}
