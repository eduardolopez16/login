<?php namespace App\Controllers;

class OperadorFilaSalida extends BaseController
{
    public function index()
    {
        
        echo view('templates/header');
        echo view('operadorfilasalida');
        echo view('templates/footer');
    }
}
