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
<li class="button">   <a href="/jim/index.php/editardatos/".<?php ?>."">Editar Mis Datos</a></li>
<li class="button">  <a href="/jim/index.php/home/logout">Cerrar Sesion</a></li>
<li class="button">  <a href="#"><?php echo 'Bienvenido '.$this->session->userdata('nombre').''; ?> </a></li>
</ul>