<?php namespace App\Controllers;

class VistasFilas extends BaseController
{
    public function index()
    {
        $data = [];
        echo view('templates/header', $data);
        echo view('vistasfilas');
        echo view('templates/footer');
    }
}
