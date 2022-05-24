<?php namespace App\Controllers;

class AdminDashboard extends BaseController
{
    public function index()
    {
        $data = [];
        echo view('templates/header', $data);
        echo view('admindashboard');
        echo view('templates/footer');
    }
}
