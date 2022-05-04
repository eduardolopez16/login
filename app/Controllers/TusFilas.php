<?php namespace App\Controllers;

class TusFilas extends BaseController
{


    public function index()
    
    {
        echo view('templates/header');
        echo view('tusfilas');
        echo view('templates/footer');

        $result['data']=$this->TusFilasModel->Getinfo();
        $this->load->view('Get_info',$result);
    }


}
