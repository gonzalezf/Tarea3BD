<html>
<head>
<title>Agregar Noticia</title>
  <link rel="stylesheet" href="https://id.usm.cl/idp/static/bootstrap.css" />

</head>
<body>

     <?php include('application/views/barra.php');
    ?>

    <h1>Agregar Noticia</h1>
    <?php
  
     echo form_open('Agregarnoticia/save'); //controlador/metodo
    ?>
        <table>

            	<tr>
                <td>Titular:</td>
                <td><input type="text" name="titulo" required class="form-control" size=20 placeholder="titular"></input></td>
             	</tr>
             	<tr>
              <tr>
                <td>Contenido:</td>
                <td><textarea rows="3" cols="53" name="contenido" required class="form-control"></textarea> </td>
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
                <td><input type="submit" name="submit"  class="btn btn-primary"value="Agregar Noticia"></input></td>
            </tr>        
        </table>
    <?php
        echo form_close();
    ?>

</body>
</html>