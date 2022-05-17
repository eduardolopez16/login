<?php namespace App\Controllers;

class NumeroVirtual extends BaseController
{
    public function index()
    {
        $data = [];
        echo view('templates/header', $data);
        echo view('numerovirtual');
        echo view('templates/footer');
    }
}
