<?php
    class Editarnoticia extends CI_Controller
    {

        function index($id_noticia)

        {
            $this->load->model('user');

             $data['InfoNoticia'] = $this->user->RetornarInfoNoticia($id_noticia);
                 $data['id_noticia'] = $id_noticia;    

            $this->load->view('editarnoticia',$data);
         
             

        }

          
        function save()
        {
            $this->load->model('user');

             if($this->input->post('submit'))
            {
                $this->user->EditarNoticia();                
            }
            redirect('Administrarnoticias'); 
        }
    }
?>