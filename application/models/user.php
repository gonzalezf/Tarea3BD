<?php
Class User extends CI_Model
{
   function login($nombre, $password)
   {
     $this -> db -> select('id, nombre, password');
     $this -> db -> from('prueba4');
     $this -> db -> where('nombre', $nombre);
     $this -> db -> where('password', $password);
     $this -> db -> limit(1);

     $query = $this -> db -> get();

     if($query -> num_rows() == 1)
     {
       return $query->result();
     }
     else
     {
       return false;
     }
   }

    function loginusuario($correo, $password)
   {
     $this -> db -> select('rol, nombre, password,correo');
     $this -> db -> from('usuario');
     $this -> db -> where('correo', $correo);
     $this -> db -> where('password', $password);
     $this -> db -> limit(1);

     $query = $this -> db -> get();

     if($query -> num_rows() == 1) //encontro un usuario con esas caracteristicas....
     {
       return $query->result();
     }
     else
     {
       return false;
     }
   }

    function process()
        {
       
            $Name = $this->input->post('nombre'); //obtenemos lo de la vista!
            $password = $this->input->post('contrasenna');
            $data = array( //de aqui hacia abajo esta todo bien!

                
                    'nombre'=>$Name,   
                    'password'=> $password //aqui utilizamos los mismos nombres que estan en la bd               
                    );
                    $this->db->insert('prueba2',$data);  //nombre de tabla , data es la informacion   
            }

    // esta funcion registra un usuario....
    function RegistrarUsuario()
    {

      $nombre = $this->input->post('nombre');
      $apellido = $this->input->post('apellido');
      $rol = $this->input->post('rol');
      $rut = $this->input->post('rut');
      $codigocarrera = $this->input->post('codigocarrera');
      $id_campus = $this->input->post('id_campus');
      $email = $this->input->post('email');
      $telefono = $this->input->post('telefono');
      $preferencia1 = $this->input->post('preferencia1');
      $preferencia2 = $this->input->post('preferencia2');
      $preferencia3 = $this->input->post('preferencia3');
      $contrasenna = $this->input->post('contrasenna');
      $motivo = $this->input->post('motivo');
      date_default_timezone_set("America/Santiago");
      $fecharegistro = date('Y-m-d H:i:s');
      
      $infousuario = array(

        'rol'=> $rol,
        'codigo_carrera' => $codigocarrera,
        'id_campus'=>$id_campus,
        'rut'=>$rut,
        'nombre'=>$nombre,
        'apellido'=>$apellido,
        'password'=>$contrasenna,
        'correo'=>$email,
        'telefono'=>$telefono

        );
      $infotablapostulante = array(
          'rol'=>$rol,
        );

       $this->db->insert('usuario',$infousuario);  
       $this->db->insert('postulante',$infotablapostulante);
    }
 
     function AgregarArea()
    {

      $nombre = $this->input->post('nombre');
      $n_colaboradores_estimado = $this->input->post('n_colaboradores_estimado');
      $inicio = $this->input->post('inicio');
      $final = $this->input->post('final');

      
      $data = array(

        'nombre'=> $nombre,
        'inicio' => $inicio,
        'final'=>$final,
        'n_colaboradores_estimado'=>$n_colaboradores_estimado,
        'n_colaboradores'=>0
    

        );
   

       $this->db->insert('area',$data);  
 
    }

    function AgregarCoordinador()
    {

      $nombre = $this->input->post('nombre');
      $apellido = $this->input->post('apellido');
      $rol = $this->input->post('rol');
      $rut = $this->input->post('rut');
      $codigocarrera = $this->input->post('codigocarrera');
      $id_campus = $this->input->post('id_campus');
      $email = $this->input->post('email');
      $telefono = $this->input->post('telefono');
      $area = $this->input->post('area'); //si el area es coordinacion general...!
      $tallapolera = $this->input->post('tallapolera');
 
      $contrasenna = $this->input->post('contrasenna');
   
      date_default_timezone_set("America/Santiago");
      $fecharegistro = date('Y-m-d H:i:s');
      
      $infousuario = array(

        'rol'=> $rol,
        'codigo_carrera' => $codigocarrera,
        'id_campus'=>$id_campus,
        'rut'=>$rut,
        'nombre'=>$nombre,
        'apellido'=>$apellido,
        'password'=>$contrasenna,
        'correo'=>$email,
        'telefono'=>$telefono

        );
      $infotablaparticipante = array(
          'rol'=>$rol,
          'tipo_participante'=>'coordinador',
          'talla_polera'=>$tallapolera
        );
      $es_general = strcmp($area, 'Coordinacion General');

      // REEMPLAZAR ESTO!, DEBE OBTENERSE EL ID PARTICIPANTE
      $id_participante = 1;
      $infotablacoordinador = array(
        'es_general' => $es_general,
        'id_participante' => $id_participante

        );


       $this->db->insert('usuario',$infousuario);  
       $this->db->insert('participante',$infotablaparticipante);
       $this->db->insert('coordinador',$infotablacoordinador);
    }

    function ObtenerTodasLasAreas()
    {
      $query = $this->db->query('SELECT id_area, nombre from area');
      return $query->result();
    }

    function RetornarInfoArea($id_area)
    {//revisar!
//      $query = $this->db->query('SELECT nombre, inicio,final, n_colaboradores_estimado from area where id_area='.$id_area.'');
      $query = $this->db->query('SELECT nombre, inicio,final, n_colaboradores_estimado from area where id_area=1');

      return $query->result();
    }
               
}
?>