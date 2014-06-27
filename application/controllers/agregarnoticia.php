<?php
    class Agregarnoticia extends CI_Controller
    {

        function index()
        {
            $this->load->view('Agregarnoticia');
        }
        function save()
        {
            $this->load->model('user');

             if($this->input->post('submit'))
            {
                $this->user->agregarnoticia();                
            }
            redirect('Administrarnoticias'); 
        }
    }
?>