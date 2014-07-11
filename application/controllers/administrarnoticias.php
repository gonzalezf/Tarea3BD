
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrarnoticias extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('user');
	}

	public function index()

	{	$data['title'] = 'probando data...';
		//$data['groups'] = $this->user->ObtenerTodasLasAreas();
		$data['groups'] = $this->user->ObtenerTodasLasNoticias($this->session->userdata('id_campus'));
		

		$this->load->helper(array('form'));
		$this->load->view('administrarnoticias',$data);

	}
}

?>