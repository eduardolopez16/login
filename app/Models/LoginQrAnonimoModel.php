<?php namespace App\Models;

use CodeIgniter\Model;

class LoginQrAnonimoModel extends Model{
    protected $table = 'formulario';
    protected $allowedFields = ['nombre', 'email','telefono', 'cantidadacompañantes'];
    

  
}
