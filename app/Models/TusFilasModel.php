<?php namespace App\Models;

use CodeIgniter\Model;

class TusFilasModel extends Model{
   
 // protected $table = 'filas';
  //protected $allowedFields = ['fila', 'hora-comienzo','hora-termino','id-fila'];
    

  // public function Getinfo(){
   // $table = new \CodeIgniter\View\Table();
    //$db = \Config\Database::connect();

   // $query = $db->query('SELECT * FROM filas');
   // $results = $query->getResult();


 //}

 

  /*View*/
    function display_records()
  {
    $query=$this->db->get("filas");
    return $query->result();
  }
	
    

}

 

