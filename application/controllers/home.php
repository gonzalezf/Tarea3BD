<!-- este es un controllador de pagina 'privada', no remover-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
              $this->load->model('user');

   if($this->session->userdata('logged_in')) //si esta logueado...!
   {
     $session_data = $this->session->userdata('logged_in');
     $this->session->set_userdata('rol', $session_data['rol']); //checkear, deberia funcionar!

     $data['nombre'] = $session_data['nombre'];
     $data['correo'] = $session_data['correo'];
     $this->session->set_userdata('nombre',$session_data['nombre']);
     $id_campus = $this->user->ObtenerIdCampusUsuario($session_data['rol']); //obtener el id campus al que pertenece el usuario logueado
     $this->session->set_userdata('id_campus',$id_campus);

     if($this->user->VerificarParticipacion($session_data['rol'])==1) //esta participando en algo (coordinador o colaborador)
     {
      if($this->user->VerificarCoordinacion($session_data['rol'])==1)
      {
        //es coordinador (general o de area)
                $id_participante = $this->user->ObtenerIdParticipante($session_data['rol']);
       $this->session->set_userdata('id_participante', $id_participante); 
        $this->load->view('home', $data); //se llama al controlador y se envia el arreglo con la info del usuario. el controllador es home

      }
      else
      {

        $id_participante = $this->user->ObtenerIdParticipante($session_data['rol']);
       $this->session->set_userdata('id_participante', $id_participante); 

        $data['noticias'] = $this->user->MostrarNoticiasColaborador($id_participante);
        
        $this->load->view('homecolaborador',$data); //retornar a home colaborador
      }
     }
     else{
        $this->load->view('homepostulante',$data); //retornar a no seleccionado
     }
    
  

   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh'); // se llama al controlador login
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?>
