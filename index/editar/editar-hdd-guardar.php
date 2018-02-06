<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE hdd SET 
			IDHDD = '{$_POST['IDHDD']}',
			MARCA = '{$_POST['MARCA']}',
			CAPACIDAD = '{$_POST['CAPACIDAD']}',
		 	TIPO = '{$_POST['TIPO']}',
		 	FECHA_CR = '{$_POST['FECHA_CR']}',
		 	HORA_CR = '{$_POST['HORA_CR']}', 
		 	OBS = '{$_POST['OBS']}' 
		 	WHERE IDHDD = '{$_POST['id']}'");

		header("location:../hdd_actualizar.php");
	};

?>