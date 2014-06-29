<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>JIM 2015</title>
 </head>
 <body>
  <?php include('application/views/barra.php');
    ?>
    <div style="text-align:center;">
   <h1>Escoja el Area </h1>
    </div>

</br>

<?php

echo '<table  style="width:30%;margin:auto;text-align:center;"class="table table-hover">';
foreach($groups as $row)
{
	//              echo '<option value="'.$row->description.'">'.$row->description.'</option>';

	echo '<tr>';
	echo '<td>';
	echo'<a href="/Jim/index.php/verpostulantes/index/'.$row->id_area.'">'.$row->nombre.'</a>';
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

 
 </body>
</html>
