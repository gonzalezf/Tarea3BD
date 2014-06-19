
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrarareas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('user');
	}

	public function index()

	{	$data['title'] = 'probando data...';
		$data['groups'] = $this->user->ObtenerTodasLasAreas();
		$this->load->helper(array('form'));
		$this->load->view('administrarareas',$data);

	}
}

?>