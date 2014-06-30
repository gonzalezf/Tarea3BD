<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>JIM 2015</title>
 </head>
 <body>
  <?php include('application/views/barra.php');
    ?>
   <h1>Postulantes </h1>

<?php
echo '<table class="table table-hover" style="fontsize:95%;">';
//var_dump($groups);
?>
<thead>
	<tr>
	<th>
	Apellido
	</th>
	<th>
	Nombre
	</th>
	<th>
	Rol
	</th>
		<th>
	Id postulante
	</th>
		<th>
	Codigo Carrera
	</th>
		<th>
	Preferencia
	</th>
		<th>
	Motivo
	</th>
		<th>
	Estado
	</th>
		<th>
	Seleccionar
	</th>
	<th>
	Deseleccionar
	</th>
		<th>
	otra area
	</th>
		<th>
	estado
	</th>
		<th>
	otra area
	</th>
		<th>
	estado
	</th>

	</tr>
</thead>
<tbody>
<?php
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
		$arreglo = array();
		//array_push($arreglo, $this->user->ObtenerAreasPostuladas($row->id_postulante));
		$arreglo = $this->user->ObtenerAreasPostuladas($row->id_postulante);
		//var_dump($arreglo); 
		$area2 = '-';
		$area3 = '-';
		$contador = 0;
		foreach($arreglo as $row2){
			$areapostulada = $row2->id_area;
			if(strcmp($areapostulada,$id_area)!=0){
				if($contador == 0){
					$area2 = $areapostulada;
					$contador = 1;
				}
				else{
					$area3 = $areapostulada;

				}
			}

		
		}
		echo '<td>';
					if(strcmp($area3,'-')!=0){
			echo $this->user->RetornarNombreArea($area2);
		}
		else {
			echo $area2;
		}


		echo '</td>';
		echo '<td>';
		if(strcmp($area2,'-')!=0){
				if($this->user->VerificarParticipacion($row->$rol)==0){
					echo 'no seleccionado :O '.$this->user->VerificarParticipacion($row->rol).'';
				}
				else{
		
					$id_participante = $this->user->ObtenerIdParticipante($row->$rol);
					echo $this->user->FueSeleccionado($area2, $id_participante);	
				}
		
		}
		else{
			echo 'no postulo';
		}

		echo '</td>';
		echo '<td>';

		if(strcmp($area3,'-')!=0){
			echo $this->user->RetornarNombreArea($area3);
		}
		else {
			echo $area3;
		}

		echo '</td>';
				echo '<td>';
		if(strcmp($area3,'-')!=0){
				if($this->user->VerificarParticipacion($row->$rol)==0){
					echo 'no seleccionado :O '.$this->user->VerificarParticipacion($row->rol).'';
				}
				else{
		
					$id_participante = $this->user->ObtenerIdParticipante($row->$rol);
					echo $this->user->FueSeleccionado($area3, $id_participante);	
				}
		
		}
		else{
			echo 'no postulo';
		}

		echo '</td>';
		


}
	
 
echo'</tbody>';
	echo '</table>';	

?>





</body>
</html>
