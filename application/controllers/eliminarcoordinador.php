<?php
    class Eliminarcoordinador extends CI_Controller
    {

        function index($rol)

        {
            $this->load->model('user');

 
            $this->user->EliminarCoordinador($rol);
            

             

           // echo ' el id area es '.$id_area.'!';
            redirect('Administrarcoordinadores');
        }

          
        
    }
?>