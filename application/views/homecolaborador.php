<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>JIM 2015</title>
 </head>
 <body>
  <?php include('application/views/barracolaborador.php');
    ?>
   <h1>Inicio</h1>


	<h2>Mostrar Noticias</h2>

	<?php 
//	var_dump($noticias);
	$i = 0;
echo '<table class="table table-hover">';
echo '<thead>';
echo '<th> Id noticia </th>';
echo '<th> Id Area </th>';
echo '<th> Creado por Id coordinador </th>';
echo '<th> Titulo </th>';
echo '<th> Contenido </th>';
echo '</thead>';
echo '<tbody>';
$this->load->model('user');
foreach($noticias as $row)
{
	//              echo '<option value="'.$row->description.'">'.$row->description.'</option>';

	

	echo '<tr>';

	echo '<td>';
	$id_noticia = 'id_noticia';
	//echo ''.$row[$id_noticia]->id_noticia.'';
	echo $row[$i]->id_noticia;
		echo '</td>';
		echo '</br>';
		echo '<td>';
	
	//echo''.$row[$i]->id_area.'';
		//echo $row[$i]->id_area;
		echo $this->user->RetornarNombreArea($row[$i]->id_area);
		echo $this->user->VerificarCoordinacion($this->session->userdata('rol'));
		echo '</br>';
		echo '</td>';


			echo '<td>';

	//echo''.$row[$i]->id_coordinador.'';
			
	echo $row[$i]->id_coordinador;
		echo '</td>';

		echo '</br>';


	echo '<td>';

	//echo''.$row[$i]->titulo.'';
		echo $row[$i]->titulo;	
		echo '</br>';
		echo '</td>';

				echo '<td>';
	
	//echo''.$row[$i]->contenido.'';
		echo $row[$i]->contenido;	
		echo '</br>';
		echo '</td>';
				
	

	//$i = $i+1;
//	$i++;
 
}
echo '</tbody>';
echo '</table>';	
?>


 </body>
</html>
