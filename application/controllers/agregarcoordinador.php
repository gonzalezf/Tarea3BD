<?php
    class Agregarcoordinador extends CI_Controller
    {

        function index()
        {
            $this->load->model('user');
            $data['groups'] = $this->user->ObtenerTodasLasAreas();
            $this->load->view('agregarcoordinador',$data);
        }
        function save()
        {
            $this->load->model('user');

             if($this->input->post('submit'))
            {
                $this->user->AgregarCoordinador();                
            }
            redirect('Agregarcoordinador'); 
        }
    }
?>