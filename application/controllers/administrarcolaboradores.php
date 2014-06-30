<?php
    class Administrarcolaboradores extends CI_Controller
    {

        function index(){
            $this->load->model('user');

       
        $rol = $this->session->userdata('rol');
        $id_participante = $this->user->ObtenerIdParticipante($rol);
        $es_general = $this->user->ObtenerEsGeneral($id_participante);
        if($es_general == 0){

            $data['groups'] = $this->user->ObtenerTodasLasAreas();
 
            $this->load->view('administrarcolaboradoresgeneral',$data);

        }
        else{

                        $id_area = $this->user->ObtenerIdAreaParticipante($id_participante);
            Redirect('vercolaboradores/index/'.$id_area.'');
           // $this->load->view('administrarpostulantes');// terminar! redireccionar a area en especifica
        } 

        }
     
    }
?>