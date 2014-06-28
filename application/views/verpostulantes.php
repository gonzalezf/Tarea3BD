<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>JIM 2015</title>
 </head>
 <body>
   <h1>Postulantes </h1>

<?php
echo '<table>';
//var_dump($groups);
echo 'apellido | nombre |rol | id postulante | codigo carrera | preferencia|motivo |estado | opcion | otra area | estado | otra area | estado ' ;

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


	$id_postulante = "id_postulante";
			echo '<td>';

	echo''.$row->$id_postulante.'';
		echo '</td>';
				echo '<td>';
	$codigo_carrera = "codigo_carrera";
	echo''.$row->$codigo_carrera.'';
		echo '</td>';
				echo '<td>';
	$preferencia = "preferencia";
	echo''.$row->$preferencia.'';
		echo '</td>';

	echo '<td>';

	echo''.$row->motivo.'';
		echo '</td>';

	echo '<td>';
	if($this->user->VerificarParticipacion($row->$rol)==0){
		echo 'no seleccionado :O '.$this->user->VerificarParticipacion($row->rol).'';
	}
	else{
		
		$id_participante = $this->user->ObtenerIdParticipante($row->$rol);
		echo $this->user->FueSeleccionado($id_area, $id_participante);	
	}

	echo '</td>';

	echo '<td>';

	echo'<a href="/jim/index.php/seleccionar/index/'.$id_area.'/'.$row->$rol.'"> SELECCIONAR </a>';
		echo '</td>';
	echo '</td>';
	echo '<td>';

	echo'<a href="/jim/index.php/seleccionar/deseleccionar/'.$id_area.'/'.$row->$rol.'"> DESELECCIONAR </a>';
		echo '</td>';

}
	
 

	echo '</table>';	

?>





</body>
</html>
