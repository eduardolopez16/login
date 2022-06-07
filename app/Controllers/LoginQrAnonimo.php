<?php namespace App\Controllers;

use App\Models\LoginQrAnonimoModel;


class LoginQrAnonimo extends BaseController


{
     public function registroanonimo() {
        $data =[];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            //haremos la validacion aqui

           // $rules = [
             //   'nombre' => 'required|min_length[3]|max_length[25]',
               // 'apellido' => 'required|min_length[3]|max_length[25]',
                //'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
               // 'password' => 'required|min_length[8]|max_length[25]',
                //'password_confirm' => 'matches[password]',

            //];


                $model = new LoginQrAnonimoModel();
            
                $newData = [
                    'nombre' => $this->request->getVar('nombre'),
                    'telefono' => $this->request->getVar('telefono'),
                    'email' => $this->request->getVar('email'),
                    'cantidadacompañantes' => $this->request->getVar('cantidadacompañantes'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Registro Listo');
                return redirect()->to('/numerovirtual');

            
        }

        echo view ('templates/header', $data);
        echo view ('loginqranonimo');
        echo view ('templates/footer');
    }
}