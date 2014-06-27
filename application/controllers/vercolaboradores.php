
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vercolaboradores extends CI_Controller {

    function __construct()
    {
        parent::__construct();
         $this->load->model('user');
    }

    public function index($id_area)

    {            $this->load->model('user');
        $data['title'] = 'probando data...';
                    $data['id_area'] = $id_area;

        $data['groups'] = $this->user->ObtenerColaboradoresArea($id_area);
        $this->load->helper(array('form'));
        $this->load->view('Vercolaboradores',$data);

    }
}

?>