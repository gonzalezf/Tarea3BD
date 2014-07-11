    <!-- BOOSTRAP-->
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/jim/css/style.css">


<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>











<!-- Barra de coordinador-->
<ul id="menu_wrap" class="Blue">
<li class="button"><a href="/jim/index.php">Inicio </a></li>
<?php 
$this->load->model('user');
$this->user->ObtenerEsGeneral($this->session->userdata('id_participante'));

if($this->user->ObtenerEsGeneral($this->session->userdata('id_participante'))==0){

  echo '<li class="button"> <a href="/jim/index.php/administrarcoordinadores/index">Coordinadores de Area</a></li>';
  echo '<li class="button">    <a href="/jim/index.php/administrarareas/index">Areas</a></li>';

}?>
<li class="button"><a href="/jim/index.php/administrarnoticias/index">Noticias</a></li>
<li class="button"><a href="/jim/index.php/administrarpostulantes/index">Postulante</a></li>
<li class="button">   <a href="/jim/index.php/editardatos/">Editar Mis Datos</a></li>
<li class="button"><a href="/jim/index.php/administrarcolaboradores/index">Colaboradores</a></li>
<li class="button">  <a href="/jim/index.php/home/logout">Cerrar Sesion</a></li>
<li class="button">  <a href="#"><?php echo 'Bienvenido '.$this->session->userdata('nombre').''; ?> </a></li>
</ul>