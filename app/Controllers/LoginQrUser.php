<?php namespace App\Controllers;

use App\Models\UserModel;


class LoginQrUser extends BaseController


{
public function loginqruser()  {
        $data =[];
        helper(['form']);


        if ($this->request->getMethod() == 'post') {
            //haremos la validacion aqui

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[25]|validateUser[email,password]',
            ];

            $errors= [ 
                'password' => [
                    'validateUser' => 'Email o Contraseña invalidos'

                ]
            ];

            if (! $this->validate($rules, $errors)) {
                $data['validation']= $this->validator;
            }else{
                $model = new UserModel();

            $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

            $this->setUserSession($user);
            return redirect()->to('formularioqr');           
           //     $newData = [
           //         'nombre' => $this->request->getVar('nombre'),
           //         'apellido' => $this->request->getVar('apellido'),
           //         'email' => $this->request->getVar('email'),
           //         'password' => $this->request->getVar('password'),
           //     ];
           //     $model->save($newData);
           //     $session = session();
           //     $session->setFlashdata('success', 'Successful Registration');
           //     return redirect()->to('/');

            }      
        }
        echo view ('templates/header', $data);
        echo view ('loginqruser');
        echo view ('templates/footer');
    }
}