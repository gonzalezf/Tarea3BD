<?php
    class Editarpolera extends CI_Controller
    {

        function index($id_participante,$id_area)

        {
            $this->load->model('user');

             $data['NombreParticipante'] = $this->user->RetornarNombreUsuario($id_participante);
                 $data['id_participante'] = $id_participante;    
                 $data['id_area'] = $id_area;
            $this->load->view('editarpolera',$data);
         
             

        }

          
        function save()
        {
            $this->load->model('user');

             if($this->input->post('submit'))
            {
                $this->user->EditarPolera();  
                $id_area = $this->user->ObtenerIdAreaPolera();              
            }
            redirect('vercolaboradores/index/'.$id_area.''); //ARREGLAR! 
        }
    }
?>