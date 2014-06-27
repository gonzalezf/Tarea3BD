<html>
<head>
<title>Agregar Noticia</title>
</head>
<body>
    <h1>Agregar Noticia</h1>
    <?php

     echo form_open('Agregarnoticia/save'); //controlador/metodo
    ?>
        <table>

            	<tr>
                <td>Titular:</td>
                <td><input type="text" name="titulo" ></input></td>
             	</tr>
             	<tr>
              <tr>
                <td>Contenido:</td>
                <td><textarea rows="3" cols="53" name="contenido"></textarea> </td>
              </tr>
              <tr>
              
              <tr>

 				       <td>Area</td>
                <td><input type="text" name="area" ></input></td>
               	</tr>

               
            <tr>
                <td><input type="submit" name="submit" value="Agregar Noticia"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>