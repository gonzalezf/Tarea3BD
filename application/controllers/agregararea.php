<?php
    class Agregararea extends CI_Controller
    {

        function index()
        {
            $this->load->model('user');
            $this->load->view('agregararea');
        }
        function save()
        {
            $this->load->model('user');

             if($this->input->post('submit'))
            {
                $this->user->agregararea();                
            }
            redirect('Administrarareas'); 
        }
    }
?>