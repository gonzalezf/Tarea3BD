<?php
    class Seleccionar extends CI_Controller
    {

        function index($id_area,$rol) //rol de persona que seleccionamos

        {
            $this->load->model('user');

            if ($this->user->VerificarParticipacion($rol) == 0){ //no habia sido seleccionado en nada...
                $rolcoordinador = $this->session->userdata('rol');
                $id_coordinador = $this->user->ObtenerIdCoordinador($rolcoordinador);
                $this->user->MarcarParticipacion($rol);

                 $id_participante = $this->user->ObtenerIdParticipante($rol);
                $this->user->InsertarEnParticipanteArea($id_area,$id_participante);
                $this->user->InsertarColaboradores($id_participante,$id_coordinador);    
            }
            else{
              
                  $rolcoordinador = $this->session->userdata('rol');
                $id_coordinador = $this->user->ObtenerIdCoordinador($rolcoordinador);
          
                 $id_participante = $this->user->ObtenerIdParticipante($rol);
                $this->user->InsertarEnParticipanteArea($id_area,$id_participante);
                $this->user->InsertarColaboradores($id_participante,$id_coordinador);
            }



    

             

           // echo ' el id area es '.$id_area.'!';
            redirect('Verpostulantes/index/'.$id_area.'');
        }

        function deseleccionar($id_area,$rol) //rol de persona que seleccionamos

        {
                  $this->load->model('user');
            if ($this->user->VerificarParticipacion($rol) == 0){ //no ha sido seleccionado en nada.

                            redirect('Verpostulantes/index/'.$id_area.'');

            }
            else{
                $id_participante = $this->user->ObtenerIdParticipante($rol);

                $this->user->Deseleccionar($id_area,$id_participante);
                redirect('Verpostulantes/index/'.$id_area.'');

            }
      
          


    

             

           // echo ' el id area es '.$id_area.'!';
        }

          
        
    }
?>