<html>
<head>
<title>Agregar Coordinador</title>
</head>
<body>
    <h1>Agregar Coordinador</h1>
    <?php

     echo form_open('Agregarcoordinador/save'); //controlador/metodo
    ?>
        <table>

              <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" ></input></td>
              </tr>
              <tr>
        <td>Apellido:</td>
                <td><input type="text" name="apellido" ></input></td>
                </tr>
                <tr>

                <td>Rol:</td>
                <td><input type="text" name="rol" ></input></td>
        </tr>
        <tr>
                <td>Rut: </td>
                <td><input type="text" name="rut"></input></td>
              </tr>    
              <tr>
                <td>Carrera: (735 informatica) </td>
                <td><input type="text" name="codigocarrera"></input></td>
              </tr> 
              <tr>
             <!--   <td>Campus: (1 san joaquin, 2 vitacura) Este campo debe desaparecer</td>
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
                <td><input type="text" name="telefono"></input></td>
              </tr>   
              <tr>
                <td>Area: </td>
                <td><input type="text" name="area"></input></td>
              </tr>   

              <tr>
                <td>Talla Polera: </td>
                <td><input type="text" name="tallapolera"></input></td>
              </tr>   

              <tr>
                <td>Contrasenna: </td>
                <td><input type="text" name="contrasenna"></input></td>
              </tr>  
            



            <tr>
                <td><input type="submit" name="submit" value="Agregar Coordinador"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>