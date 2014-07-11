<?php
    class Agregarnoticia extends CI_Controller
    {

        function index()
        {
            $this->load->model('user');
            
                        $data['groups'] = $this->user->ObtenerTodasLasAreas();
                        $this->load->view('Agregarnoticia',$data);

        }
        function save()
        {
            $this->load->model('user');

             if($this->input->post('submit'))
            {
                $this->user->agregarnoticia();                
            }
            redirect('Administrarnoticias'); 
        }
    }
?>