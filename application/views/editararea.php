<html>
<head>
<title>Editar Area</title>
</head>
<body>
    <h1>Editar Area</h1>
    <?php
    echo $id_area;
                echo ' el nombre del area es  '.$InfoArea->nombre.'!';
                       echo ' el inicio es  '.$InfoArea->inicio.'!';
     echo form_open('Editararea/save'); //controlador/metodo
    ?>
        <table>

            	<tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" ></input></td>
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
                <td><input type="text" name="n_colaboradores_estimado" ></input></td>
               	</tr>

               
            <tr>
                <td><input type="submit" name="submit" value="submit"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>