<html>
<head>
<title>Postular JIM 2015</title>
  <link rel="stylesheet" href="https://id.usm.cl/idp/static/bootstrap.css" />
 <style type="text/css">
      body {
        padding-top: 10px; 
        background-color: #eee;
      }
      
      #login-form {
        width: 83%;
        background-color: white;
        padding: 20px;
           padding-left: 80px; /* ESTO no es original */
      -webkit-border-radius: 0px 0px 10px 0px;
           -moz-border-radius: 0px 0px 10px 0px;
                border-radius: 0px 0px 10px 0px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
                
      }
      
      #login-head {
        width: 97%;
        height: 30px;
        padding: 20px;
        background: url('https://id.usm.cl/idp/static/usm-2.jpg') no-repeat center;
        
        font-size: 20pt;

        font-family: 'Arial', serif;
        border: 2px solid #ccc;
  
      }
      .input-append select[class*="span"] {
    width: auto;
    display: inline-block;
  }
  
h3 {
  display: inline;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/jim/application/js/validator.js"></script>
</head>
<body>


<div class="container">
<div class="row-fluid">
  <div class="span11">
    <div id="login-head">
          <img src="https://id.usm.cl/idp/static/utfsm-logo-100px.png" style="float: left;"/>
          <div style="text-align: center; float: right;"> POSTULACION JIM 2015 - UTFSM</div>
      </div>
      </div>
        <div id="login-form">
      <br />
        

        
      
      <div class="row-fluid">
      </br>
      </br>
        <div class="span6">
        </br>


    <?php

     echo form_open('registro/save'); //controlador/metodo
    ?>
        <table>

            	<tr>
                <td>Nombre:</td>
                <td><input type="text" size="30"  class="form-control" placeholder="nombre" required name="nombre" ></input></td>
             	</tr>
             	<tr>
 				<td>Apellido:</td>
                <td><input type="text" size="30"  class="form-control" placeholder="apellido" required  name="apellido" ></input></td>
               	</tr>
               	<tr>

                <td>Rol:</td>
                <td><input type="text" size="20"  class="form-control" placeholder="201273500-K" pattern="^(\d{1,9})\-?([\dkK])$" required  name="rol" ></input></td>
				</tr>
				<tr>
                <td>Rut: </td>
                <td><input type="text" size="20"  class="form-control" placeholder="18.354.232-k" pattern="^0*(\d{1,3}(\.?\d{3})*)\-?([\dkK])$" required name="rut"></input></td>
           		</tr>    
           		<tr>
                <td>Carrera:  </td>
                <!--<td><input type="text" name="codigocarrera"></input></td>
-->
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
              <!--  <td>Campus: (1 san joaquin, 2 vitacura) Este campo debe desaparecer</td>
                <td><input type="text" name="id_campus"></input></td>-->
           		</tr>   
            	<tr>
            	<tr>
                <td>E-mail: </td>
                <td><input type="text" name="email"></input></td>
           		</tr>   
            	<tr>
            	<tr>
                <td>Telefono: </td>
                <td><input type="text"  required class="form-control" name="telefono"></input></td>
           		</tr> 
                           <tr>
                <td>Preferencia 1: </td>
<!--                <td><input type="text" name="area"></input></td>
    -->
               
              <td>
              <?php echo '<select required class="form-control" name="preferencia1">'; 
        
               
                  
               
               foreach($groups as $row){
                  echo '<option value="'.$row->nombre.'">'.$row->nombre.'</option>';


                  }

                 
     
                ?>
              </select>
              </td>
        
              </tr>   
                           <tr>

                <td>Preferencia 2: </td>
<!--                <td><input type="text" name="area"></input></td>
    -->
               
              <td>
              <?php echo '<select required class="form-control" name="preferencia2">'; 
        
               
                  
               
               foreach($groups as $row){
                  echo '<option value="'.$row->nombre.'">'.$row->nombre.'</option>';


                  }

                 
     
                ?>
              </select>
              </td>
        
              </tr>   
             <tr>

                <td>Preferencia 3: </td>
<!--                <td><input type="text" name="area"></input></td>
    -->
               
              <td>
              <?php echo '<select required class="form-control" name="preferencia3">'; 
        
               
                  
               
               foreach($groups as $row){
                  echo '<option value="'.$row->nombre.'">'.$row->nombre.'</option>';


                  }

                 
     
                ?>
              </select>
              </td>
        
              </tr>   

  <!--
            	<tr>
                <td>Preferencia 1: </td>
                <td><input type="text"  required class="form-control" name="preferencia1"></input></td>
           		</tr>   

           		<tr>
                <td>Preferencia 2: </td>
                <td><input type="text" required class="form-control"  name="preferencia2"></input></td>
           		</tr>   
           		<tr>
                <td>Preferencia 3: </td>
                <td><input type="text"  required class="form-control" name="preferencia3"></input></td>
           		</tr>-->  
           		<tr>
                <td>Contrasenna: </td>
                <td><input type="password" name="contrasenna"></input></td>
           		</tr>  
           		<td>Explicanos porque quieres  participar: </td>
                <td><input type="text" name="motivo"></input></td>
           		</tr>      



            <tr>
                <td><input type="submit" name="submit" value="submit"></input></td>
            </tr>        
        </table>


    <?php
        echo form_close();
    ?>

      </div>
      <!--<div class="span1"></div>-->
    </div>
  </div>
  </div>
  </div> 


</body>
</html>