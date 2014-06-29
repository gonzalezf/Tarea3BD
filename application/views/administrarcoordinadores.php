<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>JIM 2015</title>
 </head>
 <body>
  <?php include('application/views/barra.php');
    ?>
    <div style="center;text-align:center;">
   <h1>Coordinadores </h1>
   </br>
  </div>

<?php
//echo'AQUII!';
//var_dump($data2);
//var_dump($this->session->userdata('rol'));
//echo 'probando';
//echo $this->session->userdata('rol');
echo '<table class="table table-hover">';
            $this->load->model('user');
?>
<thead>
        <tr>
          <th>Nombre </th>
          <th>Apellido</th>
          <th>Rol </th>
          <th>Talla Polera</th>
                    <th>Editar</th>
                              <th>Eliminar</th>


        </tr>
      </thead>
<tbody>
<?php foreach($groups as $row)
{
	//              echo '<option value="'.$row->description.'">'.$row->description.'</option>';

	echo '<tr>';
	echo '<td>';
	echo $this->user->ObtenerNombreConRol($row->rol);
	echo '</td>';
	echo '<td>';
	echo $this->user->ObtenerApellidoConRol($row->rol);
	echo '</td>';
	echo '<td>';
	echo'<a href="'.$row->rol.'">'.$row->rol.'</a>';
		echo '</td>';
		echo '<td>';
	echo''.$row->talla_polera.'';
		echo '</td>';
	echo '<td>';
	echo '<a href="/jim/index.php/editarcoordinador/index/'.$row->rol.'"> Editar </a>';
		echo '</td>';
	echo '<td>';
	echo '<a href="/jim/index.php/eliminarcoordinador/index/'.$row->rol.'"> Eliminar </a>';
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
?>	
</tbody>
<?php echo '</table>';	
?>







   
   <a href="/jim/index.php/agregarcoordinador/index" style="float:right;margin-right:80px;" class="btn btn-primary">Agregar Coordinador </a>
 </body>
</html>
