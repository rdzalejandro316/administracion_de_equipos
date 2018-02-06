<?php

	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	session_start();
	$_SESSION['usuario']=$usuario;

	$conexion=mysqli_connect("localhost","root","","inventarios_soft");
	$consulta="SELECT * FROM c_usuario WHERE usuario='$usuario' and clave='$clave'";
	$resultado=mysqli_query($conexion, $consulta);

	$filas=mysqli_num_rows($resultado);

	if ($filas>0) {
		 header("location:index/index.php");
	}else{
		 header("location:formulario.php");
		echo "usuario o contrase&ntildea incorrecta";
	}
	

mysqli_free_result($resultado);
mysqli_close($conexion);