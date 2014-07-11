<html>
<head>
<title>Editar Coordinador</title>
</head>
<body>
 <?php include('application/views/barra.php');
    ?>
    <h1>Editar Coordinador</h1>
    <?php
    $this->load->model('user');
     echo form_open('Editarcoordinador/save'); //controlador/metodo
    ?>
        <table>

              <?php 
              
              echo $id_participante; ?>
              
              <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" size=30  class="form-control " required  value=<?php echo $InfoArea[0]->nombre?>  ></input></td>
              </tr>
              <tr>
        <td>Apellido:</td>
                <td><input type="text" name="apellido"  size=30 class="form-control " required value=<?php echo $InfoArea[0]->apellido?>  ></input></td>
                </tr>
                <tr>

                
                <td><input type="hidden" name="rol"  pattern="^(\d{1,9})\-?([\dkK])$"  value=<?php echo $rol ?> ></input></td>
        </tr>
        <tr>
                <td>Rut: </td>
                <td><input type="text" name="rut"  pattern="^0*(\d{1,3}(\.?\d{3})*)\-?([\dkK])$"   class="form-control " required  value=<?php echo $InfoArea[0]->rut?> ></input></td>
              </tr>    
         <!--    <tr>
                <td>Carrera: (735 informatica) </td>
                <td><input type="text" name="codigocarrera"  class="form-control " required  value=<?php echo $InfoArea[0]->codigo_carrera?> ></input></td>
              </tr>-->
                            <tr>
                <td>Carrera:  </td>
                <!--<td><input type="text" name="codigocarrera"></input></td>-->
                                <?php 
                $options = array(
                      '0' => 'Escoger  carrera.. ',
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
          
                <td><input type="hidden" name="id_campus"class="form-control " required  value=<?php echo $InfoArea[0]->id_campus?> ></input></td>
              </tr>   
              <tr>
              <tr>
                <td>E-mail: </td>
                <td><input type="text" name="email" class="form-control " required  value=<?php echo $InfoArea[0]->correo?> ></input></td>
              </tr>   
              <tr>
              <tr>
                <td>Telefono: </td>
                <td><input type="text" name="telefono" class="form-control "  required  value=<?php echo $InfoArea[0]->telefono?> ></input></td>
              </tr>   
              <tr>
                <td>Area: </td>
             <!--  <td><input type="text" name="area"></input></td>
              -->
              <td>
                
                 <?php echo '<select name="area">'; 
        
               
                  
               
               foreach($groups as $row){
                  echo '<option value="'.$row->nombre.'">'.$row->nombre.'</option>';


                  }

                 
     
                ?>
              </select>
              </td>
              </tr>   

              <tr>
                <td>Talla Polera: </td>
                <!--<td><input type="text" name="tallapolera"></input></td>
              -->

              <?php 

                $options = array(
                  '-' => 'Escoge tu talla..',
                  'XS' => 'XS',
                  'S' => 'S',
                  'M' => 'M',
                  'L' => 'L',
                  'XL' =>'XL'
                  );
                echo form_dropdown('tallapolera', $options, $this->user->ObtenerTallaPolera($id_participante));
               ?>

              
              </td>
              </tr>   

              <tr>
                <td>Contrasenna: </td>
                <td><input type="password" class="form-control " required  name="contrasenna" value=<?php echo $InfoArea[0]->password ?>></input></td>
              </tr>  
            



            <tr>
                <td><input type="submit" name="submit"  class="btn btn-primary" value="Editar Coordinador"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>