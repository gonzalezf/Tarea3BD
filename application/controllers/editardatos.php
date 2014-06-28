<?php
    class Editardatos extends CI_Controller
    {

        function index()

        {
            $this->load->model('user');

             $data['InfoArea'] = $this->user->ObtenerInfoUsuario($this->session->userdata['rol']);
                    
                 
            $this->load->view('editardatos',$data);
         
             

        }

          
        function save()
        {
            $this->load->model('user');

             if($this->input->post('submit'))
            {
                $this->user->EditarDatos(); //Realizar!
                $this->user->EditarPolera();  
                $id_area = $this->user->ObtenerIdAreaPolera();              
            }
            redirect('home/index/'); //ARREGLAR! 
        }
    }
?>