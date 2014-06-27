<?php
    class Eliminarnoticia extends CI_Controller
    {

        function index($id_noticia)

        {
            $this->load->model('user');

 
            $this->user->Eliminarnoticia($id_noticia);
            

             

           // echo ' el id area es '.$id_area.'!';
            redirect('Administrarnoticias');
        }

          
        
    }
?>