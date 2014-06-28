<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>JIM 2015</title>
 </head>
 <body>
   <h1>Colaboradores </h1>

<?php
echo '<table>';
//var_dump($groups);
echo 'apellido | nombre |rol | id postulante | codigo carrera | correo| telefono|talla polera |id_area ' ;
$this->load->model('user');


foreach($groups as $row)
{
	//              echo '<option value="'.$row->description.'">'.$row->description.'</option>';

	

	echo '<tr>';

	echo '<td>';
	$apellido = "apellido";
	echo ''.$row->$apellido.'';
		echo '</td>';
		echo '<td>';
	$nombre = "nombre";
	echo''.$row->$nombre.'';
		echo '</td>';

$rol = "rol";
			echo '<td>';

	echo''.$row->$rol.'';
		echo '</td>';


	$id_postulante = "id_participante";
			echo '<td>';

	echo''.$row->$id_postulante.'';
		echo '</td>';
				echo '<td>';
	$codigo_carrera = "codigo_carrera";
	echo''.$row->$codigo_carrera.'';
		echo '</td>';
				echo '<td>';
	
	echo''.$row->correo.'';
		echo '</td>';

		echo '<td>';
	
	echo''.$row->telefono.'';
		echo '</td>';


	echo '<td>';
	echo '<td>';
	
	echo''.$row->talla_polera.'';
		echo '</td>';
echo '<td>';
	
	echo''.$row->id_area.'';
		echo '</td>';
	echo '<td>';
	echo '<a href="/jim/index.php/editarpolera/index/'.$row->id_participante.'/'.$row->id_area.'">Editar Polera </a>';
	echo '</td>';

	

	
	
 
}
echo '</table>';	
?>





</body>
</html>
