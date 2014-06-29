
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrarcoordinadores extends CI_Controller {

	function __construct()
	{
		parent::__construct();
				 $this->load->model('user');

	}

	public function index()

	{
		
		$data['groups'] = $this->user->ObtenerTodosLosCoordinadores($this->session->userdata('id_campus'));
		//$data2['probandosession'] =  $this->session->userdata('rol');
	
		$this->load->helper(array('form'));
		$this->load->view('Administrarcoordinadores',$data);

	}
}

?>