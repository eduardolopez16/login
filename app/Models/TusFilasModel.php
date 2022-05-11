<?php namespace App\Models;

use CodeIgniter\Model;

class TusFilasModel extends Model{
   protected $table = 'filas';
  protected $allowedFields = ['nombre-fila', 'hora-comienzo','hora-termino','dias-disponibles'];
    
   function TusFilasModel(){
  
   }
   public function Getinfo(){
    $table = new \CodeIgniter\View\Table();
    $db = \Config\Database::connect();

    $query = $db->query('SELECT * FROM filas');
    $results = $query->getResult();


 }
    

}

 

