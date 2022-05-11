<?php namespace App\Controllers;

class OperadorFilas extends BaseController
{
    public function operadorfilas()
    {
        $data = [];
        echo view('templates/header');
        echo view('operadorfilas');
        echo view('templates/footer');
    }
}
