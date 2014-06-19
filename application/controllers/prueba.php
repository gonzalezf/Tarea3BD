<?php
    class Prueba extends CI_Controller
    {

        function index()
        {
            $this->load->view('prueba');
        }
        function save()
        {
            $this->load->model('user');

             if($this->input->post('submit'))
            {
                $this->user->process();                
            }
            redirect('Prueba'); 
        }
    }
?>