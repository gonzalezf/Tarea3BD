
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

        if($id_area != 0){

                        $data['estadisticacarrera'] = $this->user->EstadisticasCarrerasArea($id_area);
                        $data['estadistica'] = $this->user->EstadisticasPolerasArea($id_area);
                    $data['groups'] = $this->user->ObtenerColaboradoresArea($id_area,$this->session->userdata('id_campus'));

                $this->load->helper(array('form'));
        $this->load->view('Vercolaboradores',$data);
        }
        else{
            $data['estadistica'] = $this->user->EstadisticasPoleras();
            $data['estadisticacarrera'] = $this->user->EstadisticasCarreras();

                $data['groups'] = $this->user->ObtenerTodosLosColaboradores($this->session->userdata('id_campus'));
                        $this->load->helper(array('form'));
        $this->load->view('Vertodosloscolaboradores',$data);

        }



    }
}

?>