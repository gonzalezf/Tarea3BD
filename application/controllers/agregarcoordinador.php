<?php
    class Agregarcoordinador extends CI_Controller
    {

        function index()
        {
            $this->load->view('agregarcoordinador');
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