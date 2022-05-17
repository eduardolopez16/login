<?php namespace App\Controllers;

use App\Models\TiendasModel;


class CrearFila extends BaseController

{

	public function crearfilas(){

		if(!session()->get('isLoggedIn'))
        redirect()->to('/');

		$data =[];
        helper(['form']);

		if ($this->request->getMethod() == 'post') {
            //haremos la validacion aqui

            $rules = [
                'tienda' => 'required|min_length[3]|max_length[25]',
                'direccion' => 'required|min_length[3]|max_length[25]',
		
			];

            if (! $this->validate($rules)) {
                $data['validation']= $this->validator;
            }else{	
				$model = new TiendasModel();

            
			$newData = [
			'tienda' => $this->request->getVar('tienda'),
			'direccion' => $this->request->getVar('direccion'),
			
		];
		$model->save($newData);
		$session = session();
		$session->setFlashdata('success', 'Tienda Registrada');
		return redirect()->to('/');

		$data['user'] = $model->where('id', session()->get('id'))->first();



	         }
	   
			}
			echo view ('templates/header', $data);
			echo view ('crearfila');
			echo view ('templates/footer');
	}
	//------------------------------------------	--------------------------

}