<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\TusFilasModel;

class TusFilas extends Controller
{

    public function tusfilas()
    
    {
        echo view('templates/header');
        echo view('tusfilas');
        echo view('templates/footer');

       // $result['data']=$this->TusFilasModel->Getinfo();
     //   $query = $this->TiendasModel->Getinfo();
       // $data['filas'] = null;
       // if($query){
       //  $data['filas'] =  $query;
       // }
       // $this->load->view('tusfilas',$data);

    // Obtenemos la clase del Model que controla los conciertos
    
    $getdata = new TusFilasModel();
    // Buscamos los conciertos
    $results = $getdata->Getinfo();
    // UN EJEMPLO PARA MASA ADELANTE
    //$conciertos = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    $data['traerfilas'] = $results;
    // Vamos a la vista ... pero con los datos!!!
    return view('tusfilas',$data);

    



    }


}
?>
