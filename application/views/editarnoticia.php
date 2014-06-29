<html>
<head>
<title>Agregar Noticia</title>
</head>
<body>
 <?php include('application/views/barra.php');
    ?>
    <h1>Agregar Noticia</h1>
    <?php

     echo form_open('Editarnoticia/save'); //controlador/metodo
    ?>
        <table>
                <td><input type="hidden" name="id_noticia" value=<?php echo $id_noticia?> ></input></td>

            	<tr>
                <td>Titular:</td>
                <td><input type="text" name="titulo"  value=<?php echo $InfoNoticia[0]->titulo?> ></input></td>
             	</tr>
             	<tr>
              <tr>
                <td>Contenido:</td>
                <td><textarea rows="3" cols="53" name="contenido" ><?php echo $InfoNoticia[0]->contenido?></textarea> </td>
              </tr>

                          
              <tr>
              
              <tr>

 				       
                <td><input type="hidden" name="area"  value=<?php echo $InfoNoticia[0]->id_area?>></input></td>

               
            <tr>
                <td><input type="submit" name="submit"  class="btn btn-primary" value="Editar Noticia"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>