<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Menu Administracion</title>
 </head>
 <body>
 <?php include('application/views/barra.php');
    ?>
  <div  style="padding-top:30px;" >
   <h1>Inicio</h1>
   <h2>Bienvenido <?php echo  $nombre; ?>!</h2>
   
   <a href="/jim/index.php/administrarareas/index">Areas</a>
<?php if($this->user->ObtenerEsGeneral($this->session->userdata('id_participante'))==0){

	echo '<a href="/jim/index.php/administrarcoordinadores/index">Coordinadores de Area</a>';

}


?>
<a href="/jim/index.php/administrarnoticias/index">Noticias</a>
<a href="/jim/index.php/administrarpostulantes/index">Postulante</a>
   <a href="/jim/index.php/editardatos/">Editar Mis Datos</a>
<a href="/jim/index.php/administrarcolaboradores/index">Colaboradores</a>

  <a href="/jim/index.php/home/logout">Cerrar Sesion</a>
  </div>
 </body>
</html>
