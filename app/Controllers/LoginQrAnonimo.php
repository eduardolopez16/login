<?php namespace App\Controllers;

use App\Models\UserModel;


class LoginQrAnonimo extends BaseController


{
     public function registroanonimo() {
        $data =[];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            //haremos la validacion aqui

            $rules = [
                'nombre' => 'required|min_length[3]|max_length[25]',
                'apellido' => 'required|min_length[3]|max_length[25]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[25]',
                'password_confirm' => 'matches[password]',

            ];

            if (! $this->validate($rules)) {
                $data['validation']= $this->validator;
            }else{
                $model = new UserModel();
            
                $newData = [
                    'nombre' => $this->request->getVar('nombre'),
                    'apellido' => $this->request->getVar('apellido'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Registro Listo');
                return redirect()->to('/');

            }      
        }

        echo view ('templates/header', $data);
        echo view ('loginqranonimo');
        echo view ('templates/footer');
    }
}