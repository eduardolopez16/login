<?php namespace App\Models;

use CodeIgniter\Model;

class TusFilasModel extends Model{
   protected $table = 'filas';
   protected $allowedFields = ['nombre-fila', 'hora-comienzo','hora-termino','dias-disponibles'];
    

   public function Getinfo(){
       
    $query = $this->db->query("SELECT * FROM filas");
    return $query->result();


}  

}


