<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE); //cargamos el modelo usuario
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('correo', 'Correo', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh'); //se entrega el nombre del controllador al cual quiere redirigir
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $correo = $this->input->post('correo');

   //query the database
   $result = $this->user->loginusuario($correo, $password); //aqui se llama a a la funcion del modelo login

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array( //aqui tenemos una sesion
         'rol' => $row->rol,
         'nombre' => $row->nombre,
         'correo'=>$row->correo
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>