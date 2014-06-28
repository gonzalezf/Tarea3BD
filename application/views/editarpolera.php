<html>
<head>
<title>Editar Area</title>
</head>
<body>
    <h1>Editar Polera</h1>
    <?php
//var_dump($InfoArea);

//    echo $id_area;
  
    //  echo ' el nombre del area es  '.$InfoArea[0]->nombre.'!';
     // echo ' el inicio es  '.$InfoArea[0]->inicio.'!';
     echo form_open('Editarpolera/save'); //controlador/metodo
    ?>
        <table>
                <td><input type="text" name="id_participante" value=<?php echo $id_participante?> ></input></td>
                <td><input type="text" name="id_area" value=<?php echo $id_area?> ></input></td>

              <tr>

              Esta editando la talla de <?php echo $NombreParticipante ?>
              </tr>
            	<tr>
                <td>Talla de Polera:</td>
                <td><input type="text" name="talla_polera"  ></input></td>
             	</tr>
             	
             
               
            <tr>
                <td><input type="submit" name="submit" value="Editar Talla de Polera"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>