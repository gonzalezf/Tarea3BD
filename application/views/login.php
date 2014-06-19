<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Iniciar Sesion </title>


</head>
<body>

<div id="container">
	<h1>Iniciar Sesion</h1>
 

	<div id="body">
  <?php echo validation_errors(); ?>

   <?php echo form_open('verifylogin'); ?> <!-- lo envia al controlador verifylogin-->

   <label for="correo">Correo Electronico: </label>
   <input type="text" size="20" id="correo" name="correo" />
   <br/>

	<label for="password">Password: </label>
	<input type="password" size="20" id="password" name="password" />
	<br/>


	<input type="submit" value="Loguearse" />
	</form>
	
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>