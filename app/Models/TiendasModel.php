<?php namespace App\Models;

use CodeIgniter\Model;

class TiendasModel extends Model{
    protected $table = 'tiendas';
    protected $allowedFields = ['tienda', 'direccion'];
    

  
}
