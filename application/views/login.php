<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Iniciar Sesion </title>

  <head>
    <meta charset="utf-8">
 
 
	<link rel="stylesheet" href="https://id.usm.cl/idp/static/bootstrap.css" />
    <style type="text/css">
      body {
        padding-top: 40px; 
        background-color: #eee;
      }
      
      #login-form {
      	width: 83%;
      	background-color: white;
      	padding: 20px;
      	   padding-left: 80px; /* ESTO no es original */
      -webkit-border-radius: 0px 0px 10px 0px;
           -moz-border-radius: 0px 0px 10px 0px;
                border-radius: 0px 0px 10px 0px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
                
      }
      
      #login-head {
      	width: 97%;
      	height: 30px;
      	padding: 20px;
      	background: url('https://id.usm.cl/idp/static/usm-2.jpg') no-repeat center;
      	
      	font-size: 20pt;

      	font-family: 'Arial', serif;
      	border: 2px solid #ccc;
	
      }
      .input-append select[class*="span"] {
    width: auto;
    display: inline-block;
  }
	
h3 {
	display: inline;
}
/*
#left-block {
	float: left;
}
#right-block {
	float: right;
}
*/
    </style>

</head>
<body>

<div class="container">
<div class="row-fluid">
  		<!--<div class="span1"></div>-->
  		<div class="span11">
		<div id="login-head">
	  			<img src="https://id.usm.cl/idp/static/utfsm-logo-100px.png" style="float: left;"/>
	  			<div style="text-align: center; float: right;"> JIM LOGIN - UTFSM</div>
	  	</div>
	  	</div>
  			<div id="login-form">
			<br />
  			

				
			
			<div class="row-fluid">
			</br>
			</br>
				<div class="span6">
				</br>

	
  <?php echo validation_errors(); ?>

   <?php echo form_open('verifylogin'); ?> <!-- lo envia al controlador verifylogin-->

                  
   <label for="correo" >Correo Electronico: </label>
   <input type="email" size="20"  class="form-control" placeholder="Correo Electronico" required  autofocus id="correo" name="correo" />
   <br/>

	<label for="password">Contraseña: </label>
	<input type="password" size="20"class="form-control" placeholder="Contraseña" required id="password" name="password" />
	<br/>


	<input type="submit" class="btn btn-primary" value="Loguearse" />
	</form>
	
		
			</div>
  		<!--<div class="span1"></div>-->
  	</div>
  </div>
  </div>
  </div> 



</body>
</html>