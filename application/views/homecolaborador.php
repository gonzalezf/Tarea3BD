<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Menu Administracion</title>
 </head>
 <body>
   <h1>Inicio</h1>
   <h2>Bienvenido Colaborador: <?php echo  $nombre; ?>!</h2>
   <a href="/jim/index.php/editardatos/".<?php ?>."">Editar Mis Datos</a>
	<h2>Mostrar Noticias</h2>

	<?php 
	var_dump($noticias);
	$i = 0;
foreach($noticias as $row)
{
	//              echo '<option value="'.$row->description.'">'.$row->description.'</option>';

	

	echo '<tr>';

	echo '<td>';
	$id_noticia = 'id_noticia';
	echo ''.$row[$i]->id_noticia.'';
		echo '</td>';
		echo '</br>';
		echo '<td>';
	
	echo''.$row[$i]->id_area.'';

		echo '</br>';
		echo '</td>';


			echo '<td>';

	echo''.$row[$i]->id_coordinador.'';
		echo '</td>';

		echo '</br>';


	echo '<td>';

	echo''.$row[$i]->titulo.'';
		
		echo '</br>';
		echo '</td>';

				echo '<td>';
	
	echo''.$row[$i]->contenido.'';
		
		echo '</br>';
		echo '</td>';
				
	

	//$i = $i+1;
	$i++;
 
}
echo '</table>';	
?>

  <a href="/jim/index.php/home/logout">Cerrar Sesion</a>
 </body>
</html>
