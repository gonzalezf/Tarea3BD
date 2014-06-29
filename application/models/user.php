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

    function VerificarParticipacion($rol) //verificar participacion en algo. 1 si esta participando, 0 si no.
   {
     $this -> db -> select('id_participante');
     $this -> db -> from('participante');
     $this -> db -> where('rol', $rol);


     $query = $this -> db -> get();

     if($query -> num_rows() == 1)
     {
       return 1;
     }
     else
     {
       return 0;
     }
   }

   function VerificarCoordinacion($rol) //verificar participacion en algo. 1 si esta participando, 0 si no.
   {
     $this -> db -> select('tipo_participante');
     $this -> db -> from('participante');
     $this -> db -> where('rol', $rol);


     $query = $this -> db -> get();
     $variable = $query->result();
     $columna = 'tipo_participante';
     $tipo = $variable[0]->$columna;
     if(strcmp($tipo,'coordinador')==0){
      return 1;
     }
     else{
      return 0;
     }
     
   }
   function FueSeleccionado($id_area, $id_participante)
   {
     $this -> db -> select('*');
     $this -> db -> from('participante_area');
     $this -> db -> where('id_area', $id_area);
     $this -> db -> where('id_participante', $id_participante);
    

     $query = $this -> db -> get();

     if($query -> num_rows() >= 1)
     {
       return 'seleccionado';
     }
     else
     {
       return 'no seleccionado';
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
public function ObtenerIdPostulante($rol)
    {
      $this->db->select('id_postulante');
      $this->db->from('postulante');
      $this->db->where('rol',$rol);
      $query = $this->db->get();
      $variable = $query->result();
      $columna = 'id_postulante';
      //return $variable[0]->'id_participante';
      return $variable[0]->$columna;
    }
    public function ObtenerIdCampusUsuario($rol)
    {
      $this->db->select('id_campus');
      $this->db->from('usuario');
      $this->db->where('rol',$rol);
      $query = $this->db->get();
      $variable = $query->result();
      $columna = 'id_campus';
      //return $variable[0]->'id_participante';
      return $variable[0]->$columna;
    }
    // esta funcion registra un usuario....

        public function ObtenerIdArea($area)
    {
      $this->db->select('id_area');
      $this->db->from('area');
      $this->db->where('nombre',$area);
      $query = $this->db->get();
      $variable=  $query->result();
      $columna = 'id_area';
     // return $variable[0]->'id_area';
      return $variable[0]->$columna;
    }

    function RegistrarUsuario()
    {

      $nombre = $this->input->post('nombre');
      $apellido = $this->input->post('apellido');
      $rol = $this->input->post('rol');
      $rut = $this->input->post('rut');
      $codigocarrera = $this->input->post('codigocarrera');
      //$id_campus = $this->input->post('id_campus');
      $id_campus = $this->ObtenerIdCampus($codigocarrera);
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
       $id_postulante = $this->ObtenerIdPostulante($rol);

       $infotablapostulacion1 = array(
        'id_postulante' => $id_postulante,
        'id_area' => $this->ObtenerIdArea($preferencia1),
        'motivo'=> $motivo,
        'preferencia'=> 1,
        'fecha_postulacion'=> $fecharegistro
        );

        $this->db->insert('postulacion',$infotablapostulacion1);
       if(strcmp($preferencia2, '--')!=0){
         $infotablapostulacion2 = array(
        'id_postulante' => $id_postulante,
        'id_area' =>  $this->ObtenerIdArea($preferencia2),
        'motivo'=> $motivo,
        'preferencia'=> 2,
        'fecha_postulacion'=> $fecharegistro
        );
        $this->db->insert('postulacion',$infotablapostulacion2);

       }
       if(strcmp($preferencia3, '--')!=0){
           $infotablapostulacion3 = array(
        'id_postulante' => $id_postulante,
        'id_area' =>  $this->ObtenerIdArea($preferencia3),
        'motivo'=> $motivo,
        'preferencia'=> 3,
        'fecha_postulacion'=> $fecharegistro
        );       
                   $this->db->insert('postulacion',$infotablapostulacion3);

       }
     
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
 function InsertarColaboradores($id_participante,$id_coordinador){
       $data = array(

        'id_participante'=> $id_participante,
        'id_coordinador' => $id_coordinador,
        
    

        );
   

       $this->db->insert('colaboradores',$data);  


 }
   function InsertarEnParticipanteArea($id_area,$id_participante)
    {


      $data = array(

        'id_participante' => $id_participante,
        
        
        'id_area'=> $id_area

        );
   

       $this->db->insert('participante_area',$data);  
 
    }
    function MarcarParticipacion($rol)
    {


      
      $data = array(

        'rol'=> $rol,
        'tipo_participante' => 'colaborador',
        'talla_polera'=>'-'
    

        );
   

       $this->db->insert('participante',$data);  
 
    }

    public function ObtenerIdParticipante($rol)
    {
      $this->db->select('id_participante');
      $this->db->from('participante');
      $this->db->where('rol',$rol);
      $query = $this->db->get();
      $variable = $query->result();
      $columna = 'id_participante';
      //return $variable[0]->'id_participante';
      return $variable[0]->$columna;
    }

    public function ObtenerIdCampus($codigocarrera)
    {
      $this->db->select('id_campus');
      $this->db->from('carrera');
      $this->db->where('codigo_carrera',$codigocarrera);
      $query = $this->db->get();
      $variable = $query->result();
      $columna = 'id_campus';
      //return $variable[0]->'id_participante';
      return $variable[0]->$columna;
    }


    public function ObtenerIdAreaPolera()
    {

            $id_area = $this->input->post('id_area');

 
      return $id_area;
    }

    public function ObtenerIdCoordinador($rol)
    {
      $id_participante = $this->ObtenerIdParticipante($rol);
      $this->db->select('id_coordinador');
      $this->db->from('coordinador');
      $this->db->where('id_participante',$id_participante);
      $query = $this->db->get();
      $variable = $query->result();
      $columna = 'id_coordinador';
      //return $variable[0]->'id_participante';
      return $variable[0]->$columna;
    }
public function ObtenerEsGeneral($id_participante)
    {
      $this->db->select('es_general');
      $this->db->from('coordinador');
      $this->db->where('id_participante',$id_participante);
      $query = $this->db->get();
      $variable = $query->result();
      $columna = 'es_general';
      //return $variable[0]->'id_participante';
      return $variable[0]->$columna;
    }

    function ObtenerTallaPolera($id_participante)
    {
     
     $this->db->select('talla_polera');
     $this->db->from('participante');
      $this->db->where('id_participante',$id_participante);
      $query= $this->db->get();
      $columna = 'talla_polera';
      $variable = $query->result();
      return $variable[0]->$columna; 
    }

    function ObtenerAreaParticipante($id_participante)
    {

     $this->db->select('nombre');
     $this->db->from('participante_area,area');
     $this->db->where('participante_area.id_area','area.id_area');
      $this->db->where('id_participante',$id_participante);
      $query= $this->db->get();
      $columna = 'nombre';
      $variable = $query->result();
      return $variable[0]->$columna; 
    }

     
    function Agregarnoticia()
    {

      $titulo = $this->input->post('titulo');
      $contenido = $this->input->post('contenido');
      $area = $this->input->post('area');
      $id_area = $this->ObtenerIdArea($area);
      $id_coordinador = $this->ObtenerIdCoordinador($this->session->userdata('rol'));

      
      $data = array(

        'titulo'=> $titulo,
        'contenido' => $contenido,
        'id_area'=>$id_area,
        'id_coordinador'=>$id_coordinador
        

        );
   

       $this->db->insert('noticias',$data);  
 
    }
    function editarnoticia($id_noticia)
    {
      $id_noticia = $this->input->post('id_noticia');
      $titulo = $this->input->post('titulo');
      $contenido = $this->input->post('contenido');
      $id_area = $this->input->post('area');


      $id_coordinador = $this->ObtenerIdCoordinador($this->session->userdata('rol'));

      
      $data = array(

        'titulo'=> $titulo,
        'contenido' => $contenido,
        'id_area'=>$id_area,
        'id_coordinador'=>$id_coordinador
        

        );
   
      $this->db->where('id_noticia',$id_noticia);
       $this->db->update('noticias',$data);  
 
    }
    function editararea()
    {
      $id_area = $this->input->post('id_area');
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
   
      $this->db->where('id_area',$id_area);
       $this->db->update('area',$data);  
 
    }

    function EditarPolera()
    {
      $talla_polera = $this->input->post('talla_polera');
      $id_participante = $this->input->post('id_participante');
      

      
      $data = array(

        'talla_polera'=> $talla_polera,
      
    

        );
   
      $this->db->where('id_participante',$id_participante);
       $this->db->update('participante',$data);  
 
    }



    function EditarDatos()
    {

      $nombre = $this->input->post('nombre');
      $apellido = $this->input->post('apellido');
      $rol = $this->input->post('rol');
      $rut = $this->input->post('rut');
      $codigocarrera = $this->input->post('codigocarrera');
      $id_campus = $this->input->post('id_campus');
      $email = $this->input->post('email');
      $telefono = $this->input->post('telefono');
      
    
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
      

    
      

      $this->db->where('rol',$rol);
       $this->db->update('usuario',$infousuario);  
  
   //    $this->db->where('rol',$rol);
     //  $this->db->update('coordinador',$infotablacoordinador);
    }

    function EditarCoordinador()
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

    
      $data['id_participante'] = $this->user->ObtenerIdParticipante($rol);

      $id_participante =  $id_participante[0]->id_participante;

      $infotablacoordinador = array(
        'es_general' => $es_general,
        'id_participante' => $id_participante

        );

      $this->db->where('rol',$rol);
       $this->db->update('usuario',$infousuario);  
       $this->db->where('rol',$rol);  
       $this->db->update('participante',$infotablaparticipante);
   //    $this->db->where('rol',$rol);
     //  $this->db->update('coordinador',$infotablacoordinador);
    }





    public function AgregarCoordinador()
    {

      $nombre = $this->input->post('nombre');
      $apellido = $this->input->post('apellido');
      $rol = $this->input->post('rol');
      $rut = $this->input->post('rut');
      $codigocarrera = $this->input->post('codigocarrera');
      //$id_campus = $this->input->post('id_campus');
      $id_campus = $this->ObtenerIdCampus($codigocarrera);
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
      $es_general = strcmp($area, 'Coordinacion General'); // 1 cuando no es coordinador general

       $this->db->insert('usuario',$infousuario);  
       $this->db->insert('participante',$infotablaparticipante);

      //$data['id_participante'] = $this->ObtenerIdParticipante($rol);

      $var_id_participante = $this->ObtenerIdParticipante($rol);

//      $id_participante2 =  $id_participante[0]->id_participante;
      $id_participante2 =  $var_id_participante;

   //   $data['id_area'] = $this->ObtenerIdArea($area);
      $var_id_area = $this->ObtenerIdArea($area);
     // $id_area2=  $id_area[0]->id_area;     
      $id_area2 = $var_id_area;


      $infotablacoordinador = array(
        'es_general' => $es_general,
        'id_participante' => $id_participante2,

        );

     $infotablaparticipantearea = array(
            'id_participante'=> $id_participante2,
            'id_area' => $id_area2,
        );


       $this->db->insert('coordinador',$infotablacoordinador);//obtener id participante!
       $this->db->insert('participante_area',$infotablaparticipantearea);
    }



    function ObtenerTodasLasAreas()
    {
      $query = $this->db->query('SELECT id_area, nombre from area');
      return $query->result();
    }
    function MostrarNoticiasColaborador($id_participante){
      //ver las areas en que ha sido seleccionado
      $query = $this->db->query('select id_area from participante_area where id_participante = 25');
      $groups = $query->result();
      $arreglo= array();

      foreach($groups as $row)
        {
          $id_area = $row->id_area;
          //obtener las noticas respecto al area en cuestion.
          $query2 = $this->db->query("select id_noticia,id_area, id_coordinador,titulo,contenido from noticias where id_area ='".$id_area."'");
          $variable = $query2->result();
          array_push($arreglo,$variable);

        }
    return $arreglo;
    }

   /* function ObtenerTodosLosCoordinadores()
    {

      $query = $this->db->query("SELECT id_participante,rol, talla_polera from participante where tipo_participante = 'coordinador'");
      return $query->result();
    }*/

        function ObtenerTodosLosCoordinadores($id_campus)
    {

      $query = $this->db->query("select  id_participante,participante.rol, talla_polera from participante,usuario where usuario.rol = participante.rol and usuario.id_campus = '".$id_campus."' and  tipo_participante = 'coordinador'");
      return $query->result();
    }
    


        function ObtenerPostulantesArea($id_area,$id_campus)
    {

    //  $query = $this->db->query("select usuario.apellido, usuario.nombre,usuario.rol,postulacion.motivo, postulante.id_postulante, usuario.codigo_carrera, postulacion.preferencia from usuario,postulante,postulacion,area where usuario.rol = postulante.rol and postulante.id_postulante = postulacion.id_postulante and postulacion.id_area = area.id_area and area.id_area = '".$id_area."'");
              $query = $this->db->query("  select usuario.apellido, usuario.nombre,usuario.rol,postulacion.motivo, postulante.id_postulante, usuario.codigo_carrera, postulacion.preferencia from usuario,postulante,postulacion,area where usuario.rol = postulante.rol and postulante.id_postulante = postulacion.id_postulante and postulacion.id_area = area.id_area and usuario.id_campus = '".$id_campus."' and area.id_area = '".$id_area."'");

      return $query->result();
    }

    public function RetornarNombreUsuario($id_participante){
    $query = $this->db->query(" select nombre from  participante, usuario where usuario.rol = participante.rol and participante.id_participante = '".$id_participante."' ");

      $columna = 'nombre';
      $variable = $query->result();
      return $variable[0]->$columna;
    }

     public function ObtenerNombreConRol($rol){
      $query = $this->db->query(" select nombre from   usuario where rol = '".$rol."' ");
      $columna = 'nombre';
      $variable = $query->result();
      return $variable[0]->$columna;
    }
        public function ObtenerApellidoConRol($rol){
      $query = $this->db->query(" select apellido from  usuario where rol = '".$rol."' ");
      $columna = 'apellido';
      $variable = $query->result();
      return $variable[0]->$columna;
    }




    function ObtenerColaboradoresArea($id_area,$id_campus)
    {
     //         $query = $this->db->query("  select usuario.apellido, usuario.nombre,usuario.rol,postulacion.motivo, postulante.id_postulante, usuario.codigo_carrera, postulacion.preferencia from usuario,postulante,postulacion,area where usuario.rol = postulante.rol and postulante.id_postulante = postulacion.id_postulante and postulacion.id_area = area.id_area and usuario.id_campus = '".$id_campus."' and area.id_area = '".$id_area."'");

     // $query = $this->db->query("select usuario.apellido, usuario.nombre,usuario.rol,participante.id_participante, usuario.codigo_carrera, usuario.correo, usuario.telefono, participante.talla_polera,participante_area.id_area from usuario, participante,participante_area where usuario.rol = participante.rol and participante.id_participante = participante_area.id_participante  and id_area = '".$id_area."'");
      $query = $this->db->query("select usuario.apellido, usuario.nombre,usuario.rol,participante.id_participante, usuario.codigo_carrera, usuario.correo, usuario.telefono, participante.talla_polera,participante_area.id_area from usuario, participante,participante_area where usuario.rol = participante.rol and participante.id_participante = participante_area.id_participante and usuario.id_campus = '".$id_campus."' and id_area = '".$id_area."'");
    
      return $query->result();
    }

     function ObtenerTodasLasNoticias($id_campus)
    {

//      $query = $this->db->query("SELECT id_noticia,id_area, id_coordinador, titulo, contenido from noticias ");
        $query = $this->db->query("select id_noticia,noticias.id_area, noticias.id_coordinador, titulo, contenido from usuario,participante,coordinador,noticias  where usuario.rol = participante.rol and participante.id_participante = coordinador.id_participante and coordinador.id_coordinador = noticias.id_coordinador and usuario.id_campus = '".$id_campus."' ");
   
      return $query->result();
    }

    function ObtenerInfoUsuario($rol)
    {
      $query = $this->db->query("SELECT codigo_carrera, id_campus, rut, nombre, apellido, password, correo, telefono from usuario where rol = '".$rol."'");
      return $query->result();
    }

    function ObtenerNomnbreCoordinador($rol)
    {
      $query = $this->db->query('SELECT nombre from usuario where rol ='.$rol.'');
      return $query->result();
    }





    function RetornarInfoArea($id_area)
    {//revisar!
//      $query = $this->db->query('SELECT nombre, inicio,final, n_colaboradores_estimado from area where id_area='.$id_area.'');
      $query = $this->db->query('SELECT nombre, inicio,final, n_colaboradores_estimado from area where id_area='.$id_area.'');

      return $query->result();
    }


    function RetornarInfoNoticia($id_noticia)
    {//revisar!
//      $query = $this->db->query('SELECT nombre, inicio,final, n_colaboradores_estimado from area where id_area='.$id_area.'');
      $query = $this->db->query('SELECT titulo,contenido,id_area,id_coordinador from noticias where id_noticia='.$id_noticia.'');

      return $query->result();
    }
     function EliminarArea($id_area)
    {//revisar!
//      $query = $this->db->query('SELECT nombre, inicio,final, n_colaboradores_estimado from area where id_area='.$id_area.'');
      $this->db->where('id_area',$id_area);
      $this->db->delete('area');

      
    }
    function Eliminarnoticia($id_noticia)
    {//revisar!
//      $query = $this->db->query('SELECT nombre, inicio,final, n_colaboradores_estimado from area where id_area='.$id_area.'');
      $this->db->where('id_noticia',$id_noticia);
      $this->db->delete('noticias');

      
    }
    function Deseleccionar($id_area,$id_participante){

      $this->db->where('id_area',$id_area);
      $this->db->where('id_participante',$id_participante);
      $this->db->delete('participante_area');
    }

    function EliminarCoordinador($rol)
    {//revisar!
//      $query = $this->db->query('SELECT nombre, inicio,final, n_colaboradores_estimado from area where id_area='.$id_area.'');
      $this->db->where('rol',$rol);
      $this->db->delete('usuario');

      
    }
                         
}
?>