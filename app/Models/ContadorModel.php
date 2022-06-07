<?php namespace App\Models;

use CodeIgniter\Model;

class ContadorModel extends Model{
    protected $table = 'contador';
    protected $allowedFields = ['contador', 'maximo'];
    

  
}
