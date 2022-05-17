<?php namespace App\Controllers;

class OperadorFilaSalida extends BaseController
{

    public function NumeroSalida(){
        
     	$data =[];
        helper(['form']);

		if ($this->request->getMethod() == 'post') {
            //haremos la validacion aqui

            $rules = [
                'numerosalida' => 'required|min_length[3]|max_length[25]',
			];

            if (! $this->validate($rules)) {
                $data['validation']= $this->validator;
            }else{	
				$model = new TiendasModel();

            }
			$newData = [
			'numerosalida' => $this->request->getVar('numerosalida'),			
		];
		$model->save($newData);
		$session = session();
		$session->setFlashdata('success', 'Tienda Registrada');
		return redirect()->to('/');

		$data['user'] = $model->where('id', session()->get('id'))->first();


    }

    echo view('templates/header');
    echo view('operadorfilasalida');
    echo view('templates/footer');



    }    
        }