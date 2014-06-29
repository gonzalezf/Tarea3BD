<?php
    class Editarcoordinador extends CI_Controller
    {

        function index($rol)

        {
            $this->load->model('user');

            $data['rol'] = $rol;
            $data['InfoArea'] = $this->user->ObtenerInfoUsuario($rol);
          $data['groups'] = $this->user->ObtenerTodasLasAreas();
            $data['id_participante'] = $this->user->ObtenerIdParticipante($rol);
          
             

           // echo ' el id area es '.$id_area.'!';
            $this->load->view('editarcoordinador',$data);
        }

          
        function save()
        {
            $this->load->model('user');

             if($this->input->post('submit'))
            {
                $this->user->EditarCoordinador();                
            }
            redirect('Administrarcoordinadores'); 
        }
    }
?>