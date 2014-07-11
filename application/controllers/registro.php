
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function index()
	{
		$this->load->model('user');

				$data['groups'] = $this->user->ObtenerTodasLasAreas();

		$this->load->library('form_validation');
				$this->load->view('registro',$data);

	}

	public function save()
	{
		$this->load->model('user'); //llamamos modelo



		if($this->input->post('submit'))
		{
				
					$this->user->RegistrarUsuario();
					Redirect('Inicio'); //redirigimos al inicio!
			
		}
		
	}
}

