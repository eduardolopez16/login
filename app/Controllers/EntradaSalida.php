<?php namespace App\Controllers;

class EntradaSalida extends BaseController
{
    public function index()
    {
        $data = [];
        echo view('templates/header', $data);
        echo view('entradasalida');
        echo view('templates/footer');
    }
}
