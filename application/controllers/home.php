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
   if($this->session->userdata('logged_in')) //si esta logueado...!
   {
     $session_data = $this->session->userdata('logged_in');
     $data['nombre'] = $session_data['nombre'];
     $data['correo'] = $session_data['correo'];
     $this->load->view('home', $data); //se llama al controlador y se envia el arreglo con la info del usuario. el controllador es home
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
