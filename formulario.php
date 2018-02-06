<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/formulario.css">
	<script type="text/javascript" src="js/validar.js"></script>
	<script type="text/javascript" src="js/formulario.js"></script>
</head>

<body class="body" onload="GetCampos()">
 	<div class="contenedor">
  		<div>

	 	 <form id="myForm" action="validar.php" method="post" onsubmit="return validar();">
			<div class="cabecera">
				Login
			</div>	
			<div class="usuario">
				<label class="icono-usuario-1"></label>
				<input id="usuario" class="user" type="text" placeholder="	usuario" name="usuario">
				<label class="error"></label>
			</div>

			<div class="clave">
				<label class="icono-clave-1"></label>
				<input id="clave" class="password" type="password" placeholder="	clave" name="clave">
				<label class="error"></label>
			</div>

			<div class="boton">
				<input class="submit" type="submit" value="iniciar sesion" name="enviado">
				<label class="php"></label>
			</div>

			
  		 </form>
		</div>
 	</div>
 	

<!-- ventanas de error-->
<!--todos los campos son obligatorios -->
	<div id="myModal-1" class="modal">
  	 <!--alert-->
  	 <div class="modal-content">
    	<span class="close">×</span>
 	    <p class="mens">todos los campos son obligatorios</p>
 	 </div>
	</div>

<!-- el usuario no puede tener mas de 20 caracteres-->
	<div id="myModal-2" class="modal">
  	 <!--alert-->
  	 <div class="modal-content">
     	<span class="close-2">×</span>
     	<p class="mens">el usuario no puede tener mas de 20 caracteres</p>
     </div>
    </div>

<!-- el usuario no puede tener mas de 20 caracteres-->
	<div id="myModal-3" class="modal">
  	 <!--alert-->
  	 <div class="modal-content">
    	<span class="close-3">×</span>
    	<p class="mens">la clave no puede tener mas de 20 caracteres</p>
  	 </div>
 	</div>

</body>
</html>