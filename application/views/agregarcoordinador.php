<html>
<head>
<title>Agregar Coordinador</title>
  <link rel="stylesheet" href="https://id.usm.cl/idp/static/bootstrap.css" />

</head>
<body>
 <?php include('application/views/barra.php');
    ?>
    <h1>Agregar Coordinador</h1>
    <?php

     echo form_open('Agregarcoordinador/save'); //controlador/metodo
    ?>
        <table>

              <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" required placeholder="Nombre" size=30 class="form-control"></input></td>
              </tr>
              <tr>
        <td>Apellido:</td>
                <td><input type="text" name="apellido" placeholder="Apellido" size=30 class="form-control"required ></input></td>
                </tr>
                <tr>

                <td>Rol:</td>
                <td><input type="text" name="rol" placeholder="Rol Usm" size=20   pattern="^(\d{1,9})\-?([\dkK])$" class="form-control"required ></input></td>
        </tr>
        <tr>
                <td>Rut: </td>
                <td><input type="text" placeholder="rut " name="rut" pattern="^0*(\d{1,3}(\.?\d{3})*)\-?([\dkK])$" required class="form-control"></input></td>
              </tr>    
              <tr>
                <td>Carrera: (735 informatica) </td>
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
                echo form_dropdown('codigocarrera', $options, '73');
                ?>
              </tr> 
              <tr>
             <!--   <td>Campus: (1 san joaquin, 2 vitacura) Este campo debe desaparecer</td>
                <td><input type="text" name="id_campus"></input></td>-->
              </tr>   
              <tr>
              <tr>
                <td>E-mail: </td>
                <td><input type="email" name="email" placeholder="email "required class="form-control" ></input></td>
              </tr>   
              <tr>
              <tr>
                <td>Telefono: </td>
                <td><input type="text" requerid size=20 class="form-control"  placeholder = "telefono" required "telefono" pattern="([0-9-+]*)"name="telefono"></input></td>
              </tr>   
              <tr>

                <td>Area: </td>
<!--                <td><input type="text" name="area"></input></td>
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
                echo form_dropdown('tallapolera', $options, '-');
               ?>

              </tr>   

              <tr>
                <td>Contrasenna: </td>
                <td><input type="password" name="contrasenna" placeholder="Contrasenna" class="form-control" size=20 required ></input></td>
              </tr>  
            



            <tr>
                <td><input type="submit" name="submit"  class="btn btn-primary" value="Agregar Coordinador"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>