<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>JIM 2015</title>
 </head>
 <body>
   <h1>Areas </h1>
</br>

<?php

echo '<table>';
foreach($groups as $row)
{
	//              echo '<option value="'.$row->description.'">'.$row->description.'</option>';

	echo '<tr>';
	echo '<td>';
	echo'<a href="'.$row->id_area.'">'.$row->nombre.'</a>';
		echo '</td>';
	echo '<td>';
	echo '<a href="/jim/index.php/editararea/index/'.$row->id_area.'"> Editar </a>';
		echo '</td>';
	echo '<td>';
	echo '<a href="/jim/index.php/eliminararea/index/'.$row->id_area.'"> Eliminar </a>';
	echo '</td>';
	echo'</tr>';

	
 /*<select class="form-control">
            <?php 

            foreach($groups as $row)
            { 
              echo '<option value="'.$row->description.'">'.$row->description.'</option>';
            }
            ?>
            </select>*/
}
echo '</table>';	
?>

   
   <a href="/jim/index.php/agregararea/index">Agregar Area </a>
 </body>
</html>
