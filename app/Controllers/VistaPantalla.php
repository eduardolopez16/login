<?php namespace App\Controllers;

class VistaPantalla extends BaseController
{
    public function index()
    {
        $data = [];
        echo view('templates/header', $data);
        echo view('vistapantalla');
        echo view('templates/footer');
    }
}
