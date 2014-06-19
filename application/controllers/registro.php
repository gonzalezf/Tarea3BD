
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function index()
	{
		$this->load->view('registro');

	}

	public function save()
	{
		$this->load->model('user'); //llamamos modelo

		if($this->input->post('submit'))
		{
			$this->user->RegistrarUsuario();
		}
		Redirect('Inicio'); //redirigimos al inicio!
	}
}

