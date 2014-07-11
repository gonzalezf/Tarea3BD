<html>
<head>
<title>Agregar Area</title>
  <link rel="stylesheet" href="https://id.usm.cl/idp/static/bootstrap.css" />

</head>
<body>
 <?php include('application/views/barra.php');
    ?>
    <h1>Agregar Area</h1>
    <?php

     echo form_open('Agregararea/save'); //controlador/metodo
    ?>
        <table>

            	<tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" required class="form-control" placeholder="nombre" size=20 ></input></td>
             	</tr>
             	<tr>
              <tr>
                <td>Hora Inicio:</td>
                <td><input type="text" name="inicio" ></input></td>
              </tr>
              <tr>
              <tr>
                <td>Hora Finalizacion:</td>
                <td><input type="text" name="final" ></input></td>
              </tr>
              <tr>

 				       <td>Numero Estimado de Participantes</td>
                <td><input type="text" name="n_colaboradores_estimado" pattern="[0-9]" required></input></td>
               	</tr>

               
            <tr>
                <td><input type="submit" name="submit"  class="btn btn-primary" value="Agregar Area"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>