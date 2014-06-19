<?php
    class Editararea extends CI_Controller
    {

        function index($id_area)

        {
            $this->load->model('user');

 
            $data['InfoArea'] = $this->user->RetornarInfoArea($id_area);
            $data['id_area'] = $id_area;

             

            echo ' el id area es '.$id_area.'!';
            $this->load->view('editararea',$data);
        }

          
        function save()
        {
            $this->load->model('user');

             if($this->input->post('submit'))
            {
                $this->user->agregararea();                
            }
            redirect('Editararea'); 
        }
    }
?>