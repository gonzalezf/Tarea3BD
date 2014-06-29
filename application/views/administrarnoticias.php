<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>JIM 2015</title>
 </head>
 <body>
  <?php include('application/views/barra.php');
    ?>
    <div style="text-align:center;">
       <h1>Noticias</h1>
    </div>



<?php
echo '<table style="width:80%; margin:auto;" class="table table-hover">';
?>
<thead>
<tr>
<th>
Titulo
</th>
<th>
Contenido
</th>
<th>
Editar
</th>
<th>
Eliminar
</th>
</tr>
</thead>
<tbody>
	

<?php
foreach($groups as $row)
{
	//              echo '<option value="'.$row->description.'">'.$row->description.'</option>';

	echo '<tr >';
	echo '<td>';
	echo ''.$row->titulo.'';
		echo '</td>';
		echo '<td>';
	echo''.$row->contenido.'';
		echo '</td>';
	echo '<td>';
	echo '<a href="/jim/index.php/editarnoticia/index/'.$row->id_noticia.'"> Editar </a>';
		echo '</td>';
	echo '<td>';
	echo '<a href="/jim/index.php/eliminarnoticia/index/'.$row->id_noticia.'"> Eliminar </a>';
	echo '</td>';
		
	
	echo'</tr>';
	


	
 
}
echo '</tbody>';
echo '</table>';	
?>




   </br>
   <a href="/jim/index.php/agregarnoticia/index " style="float:right; margin-right:250px;" class="btn btn-primary">Agregar Noticia</a>

</body>
</html>
