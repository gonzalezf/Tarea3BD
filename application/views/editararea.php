<html>
<head>
<title>Editar Area</title>
</head>
<body>
    <h1>Editar Area</h1>
    <?php
//var_dump($InfoArea);

//    echo $id_area;
  
    //  echo ' el nombre del area es  '.$InfoArea[0]->nombre.'!';
     // echo ' el inicio es  '.$InfoArea[0]->inicio.'!';
     echo form_open('Editararea/save'); //controlador/metodo
    ?>
        <table>
                <td><input type="hidden" name="id_area" value=<?php echo $id_area?> ></input></td>

            	<tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" value=<?php echo $InfoArea[0]->nombre?> ></input></td>
             	</tr>
             	<tr>
              <tr>
                <td>Hora Inicio:</td>
                <td><input type="text" name="inicio" value=<?php echo $InfoArea[0]->inicio?> ></input></td>
              </tr>
              <tr>
              <tr>
                <td>Hora Finalizacion:</td>
                <td><input type="text" name="final" value=<?php echo $InfoArea[0]->final?> ></input></td>
              </tr>
              <tr>

 				       <td>Numero Estimado de Participantes</td>
                <td><input type="text" name="n_colaboradores_estimado" value=<?php echo $InfoArea[0]->n_colaboradores_estimado?> ></input></td>
               	</tr>

               
            <tr>
                <td><input type="submit" name="submit" value="Editar Area"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>