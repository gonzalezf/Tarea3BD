<?php
    class Eliminararea extends CI_Controller
    {

        function index($id_area)

        {
            $this->load->model('user');

 
            $this->user->EliminarArea($id_area);
            

             

           // echo ' el id area es '.$id_area.'!';
            redirect('Administrarareas');
        }

          
        
    }
?>