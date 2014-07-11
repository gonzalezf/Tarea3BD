<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>JIM 2015</title>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script type="text/javascript">
    $(function () {
        $('.confirmareditarcomentario').click(function (e) {
            e.preventDefault();
            if (window.confirm("Esta seguro que desea editar el area ?")) {
                location.href = this.href;
            }
        });
    });


</script>


<script type="text/javascript">
    $(function () {
        $('.confirmareliminarcomentario').click(function (e) {
            e.preventDefault();
            if (window.confirm("Esta seguro que desea eliminar el area?")) {
                location.href = this.href;
            }
        });
    });


</script>

 </head>
 <body>
  <?php include('application/views/barra.php');
    ?>
    <div style="text-align:center; margin:auto;">
   <h1>Areas </h1>
   </div>
</br>

<?php

echo '<table   style="width:60%;margin:auto;"class="table table-hover">';
?>

<thead>
        <tr>
          <th>Nombre </th>

                    <th>Editar</th>
                              <th>Eliminar</th>


        </tr>
      </thead>
<tbody>
<?php
foreach($groups as $row)
{
	//              echo '<option value="'.$row->description.'">'.$row->description.'</option>';

	echo '<tr>';
	echo '<td>';
	echo $row->nombre;
		echo '</td>';
	echo '<td>';
	echo '<a class="confirmareditarcomentario" href="/jim/index.php/editararea/index/'.$row->id_area.'"> Editar </a>';
		echo '</td>';
	echo '<td>';
	echo '<a class="confirmareliminarcomentario" href="/jim/index.php/eliminararea/index/'.$row->id_area.'"> Eliminar </a>';
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
echo '</tbody>';
echo '</table>';	
?>

</br>
   
   <a href="/jim/index.php/agregararea/index"  style="float:right;margin-right:380px; " class="btn btn-primary">Agregar Area </a>
 </body>
</html>
