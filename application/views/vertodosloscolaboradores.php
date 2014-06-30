<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>JIM 2015</title>
 </head>
 <body>
  <?php include('application/views/barra.php');
    ?>
    <div style="text-align:center;">
   <h1>Colaboradores </h1>
    </div>


<?php


?>
<div class="row">

  <div class="col-md-2">






<?php 
$this->load->model('user');
echo '<table class="table table-hover">';
//var_dump($estadistica);
echo '<thead>';
echo '<tr>';
echo '<th> Talla polera </th>';
echo '<th> Numero </th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach($estadistica as $row3)
{
	echo '<tr>';
	echo '<td>';
	echo $row3->talla_polera;
	echo '</td>';
	echo '<td>';
	echo $row3->count;
	echo '</td>';
	echo '</tr>';


}
echo '</tbody>';
	echo '</table>';
echo '</br>';
echo '</br>';
echo '<table class="table table-hover">';
//var_dump($estadistica);
echo '<thead>';
echo '<tr>';
echo '<th> Carrera </th>';
echo '<th> Numero </th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach($estadisticacarrera as $row3)
{
	echo '<tr>';
	echo '<td>';
	echo $this->user->RetornarNombreCarrera($row3->codigo_carrera);
	echo '</td>';
	echo '<td>';
	echo $row3->count;
	echo '</td>';
	echo '</tr>';


}
echo '</tbody>';
	echo '</table>';



?>

  </div>
    <div class="col-md-10">
<?php

echo '<table class="table table-hover">';
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
	Id participante
	</th>
		<th>
	Codigo Carrera
	</th>
		<th>
	Correo
	</th>
		<th>
	Telefono
	</th>
		<th>
	Talla Polera
	</th>
		<th>
	Area 1 
	</th>
	
	<th>
	Area 2
	</th>
	<th>
	Area 3
	</th>
	<th>
	Editar Polera
	</th>
	</tr>
</thead>
<tbody>
<?php

$this->load->model('user');


foreach($groups as $row)
{
	//              echo '<option value="'.$row->description.'">'.$row->description.'</option>';
	$area1 = '-';
		$area2 = '-';
		$area3 = '-';

	$arreglo = array();
	$arreglo = $this->user->ObtenerAreasSeleccionado($row->id_participante);
	$contador = 0;

	foreach($arreglo as $row2)
	{
		if($contador == 0){
			$area1 = $row2->id_area;
			$id_area = $area1;
			$contador = 1;
			continue;
		}
		if($contador == 1){
			$area2 = $row2->id_area;
			$contador = 2;

			continue;
		}
		if($contador == 2){
			$area3 = $row2->id_area;
			$contador = 0;
			continue;

		}
	}
	if(strcmp($area1,'-')!=0){


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

	
	echo''.$row->talla_polera.'';
		echo '</td>';
	
	echo '<td>';
	
			$contador = 0;
	if(strcmp($area1,'-')!=0){
		echo''.$this->user->RetornarNombreArea($area1).'';	
	}
	else{
		echo $area1;
	}

		echo '</td>';

		echo '<td>';
		if(strcmp($area2,'-')!=0){
		echo''.$this->user->RetornarNombreArea($area2).'';	
	}
	else{
		echo $area2;
	}
		echo '</td>';
		echo '<td>';
	
		if(strcmp($area3,'-')!=0){
		echo''.$this->user->RetornarNombreArea($area3).'';	
	}
	else {
		echo $area3;
	}
		echo '</td>';
	
	echo '<td>';
	echo '<a href="/jim/index.php/editarpolera/index/'.$row->id_participante.'/0 " >Editar Polera </a>';
	echo '</td>';

	

	
	

	}
	
 
}
echo '</tbody>';
echo '</table>';	
?>



    </div>
</div>





</body>
</html>