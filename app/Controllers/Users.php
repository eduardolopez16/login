<?php namespace App\Controllers;

use App\Models\UserModel;


class Users extends BaseController


{
    public function index()  {
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
            return redirect()->to('dashboard');           
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
        echo view ('login');
        echo view ('templates/footer');
    }
        private function setUserSession($user){
            $data = [
            'id'=> $user['id'],
            'nombre'=>$user['nombre'],      
            'apellido'=>$user['apellido'],
            'email'=>$user['email'],
            'isLoggedIn'=> true,
            ];

            session()->set($data);
            return true;
        }
    public function register() {
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
        echo view ('register');
        echo view ('templates/footer');
    }
    public function profile(){
        
		        if(!session()->get('isLoggedIn'))
        redirect()->to('/');
        
		$data = [];
		helper(['form']);
		$model = new UserModel();

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[20]',
				'lastname' => 'required|min_length[3]|max_length[20]',
				];

			if($this->request->getPost('password') != ''){
				$rules['password'] = 'required|min_length[8]|max_length[255]';
				$rules['password_confirm'] = 'matches[password]';
			}


			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{

				$newData = [ 
					'id' => session()->get('id'),
					'firstname' => $this->request->getPost('firstname'),
					'lastname' => $this->request->getPost('lastname'),
					];
					if($this->request->getPost('password') != ''){
						$newData['password'] = $this->request->getPost('password');
					}
				$model->save($newData);

				session()->setFlashdata('success', 'Successfuly Updated');
				return redirect()->to('/profile');

			}
		}

		$data['user'] = $model->where('id', session()->get('id'))->first();
		echo view('templates/header', $data);
		echo view('profile');
		echo view('templates/footer');
	}

	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}

}