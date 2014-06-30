
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function index()
	{
		$this->load->view('registro');
		$this->load->library('form_validation');


	}

	public function save()
	{
		$this->load->model('user'); //llamamos modelo


                $this->form_validation->set_rules('codigocarrera', 'codigocarrera', 'required');

		if($this->input->post('submit'))
		{
			if ($this->form_validation->run() == FALSE)
					{
						$this->load->view('registro');
					}
					else

					{
					$this->user->RegistrarUsuario();
					Redirect('Inicio'); //redirigimos al inicio!
					}

			
		}
		
	}
}

