<html>
<head>
<title>Editar Datos</title>
</head>
<body>
 <?php 
$this->load->library('session');
if($this->user->VerificarParticipacion($this->session->userdata['rol'])==1) 
    {

             if($this->user->VerificarCoordinacion($this->session->userdata['rol'])==1)
           {

             include('application/views/barra.php');

           }
           else{
                 include('application/views/barracolaborador.php');
           }
    }
else
{
  include('application/views/barrapostulante.php');
}


    ?>
    <h1>Editar Datos</h1>
    <?php

     echo form_open('Editardatos/save'); //controlador/metodo
 
     $this->load->model('user');
    ?>
        <table>

              
              <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" size=30 required class="form-control" value=<?php echo $InfoArea[0]->nombre?>  ></input></td>
              </tr>
              <tr>
        <td>Apellido:</td>
                <td><input type="text" name="apellido" size=30 required class="form-control" value=<?php echo $InfoArea[0]->apellido?>  ></input></td>
                </tr>
                <tr>

                
                <td><input type="hidden" name="rol"  value=<?php echo $this->session->userdata['rol'] ?> ></input></td>
                <td><input type="hidden" name="id_participante" value=<?php echo $this->session->userdata['id_participante'] ?> ></input></td>

        </tr>
        <tr>
                <td>Rut: </td>
                <td><input type="text" name="rut"  pattern="^0*(\d{1,3}(\.?\d{3})*)\-?([\dkK])$" required class="form-control" value=<?php echo $InfoArea[0]->rut?> ></input></td>
              </tr>    
           <!--   <tr>
                <td>Carrera: (735 informatica) </td>
                <td><input type="text" name="codigocarrera"  value=<?php echo $InfoArea[0]->codigo_carrera?> ></input></td>
              </tr> -->

                          <tr>
                <td>Carrera: </td>
                <!--<td><input type="text" name="codigocarrera"></input></td>-->
                                <?php 
                $options = array(
                     
                      '73' => 'Informatica',
                      '11' => 'Civil',
                      '04' => 'Plan Comun',
                      '23' => 'Electrica',
                      '51' => 'Quimica',
                      '66'=>'Comercial',
                      '60' => 'Industrial'
                  );
                echo form_dropdown('codigocarrera', $options, $InfoArea[0]->codigo_carrera);
                ?>
              </tr> 



              <tr>
             
                <td><input type="hidden" name="id_campus" value=<?php echo $InfoArea[0]->id_campus?> ></input></td>
              </tr>   
              <tr>
              <tr>
                <td>E-mail: </td>
                <td><input type="email" name="email" required class="form-control" value=<?php echo $InfoArea[0]->correo?> ></input></td>
              </tr>   
              <tr>
              <tr>
                <td>Telefono: </td>
                <td><input type="text" name="telefono" pattern="([0-9]*)"required class="form-control" value=<?php echo $InfoArea[0]->telefono?> ></input></td>
              </tr>   
            

              <tr>
                <td>Talla Polera: </td>
               <!-- <td><input type="text" name="talla_polera"></input></td>-->
                              <?php 

                $options = array(
                  '-' => 'Escoge tu talla..',
                  'XS' => 'XS',
                  'S' => 'S',
                  'M' => 'M',
                  'L' => 'L',
                  'XL' =>'XL'
                  );

                if($this->user->VerificarParticipacion($this->session->userdata['rol'])==1) 
                {
                                  echo form_dropdown('talla_polera', $options, $this->user->ObtenerTallaPolera($this->user->ObtenerIdParticipante($this->session->userdata['rol'])));

                }
    
               ?>
              </tr>   

              <tr>
                <td>Contrasenna: </td>
                <td><input type="password" required class="form-control" name="contrasenna" value=<?php echo $InfoArea[0]->password ?>></input></td>
              </tr>  
            



            <tr>
                <td><input type="submit" name="submit"  class="btn btn-primary" value="Editar Datos"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>