<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE perisferico SET 
		IDPERISFERICO = '{$_POST['IDPERISFERICO']}', 
		ACTIVO = '{$_POST['ACTIVO']}',
		DESCRIPCION = '{$_POST['DESCRIPCION']}',
		MARCA = '{$_POST['MARCA']}',
		MODELO = '{$_POST['MODELO']}',
		TIPO = '{$_POST['TIPO']}',
		SERIAL = '{$_POST['SERIAL']}',
		FECHA_CR = '{$_POST['FECHA_CR']}', 
		HORA_CR = '{$_POST['HORA_CR']}', 
		OBS = '{$_POST['OBS']}'
		 WHERE IDPERISFERICO = '{$_POST['id']}'");

		header("location:../perisferico_actualizar.php");
	};

?>