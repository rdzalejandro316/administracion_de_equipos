<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE ram SET 
		IDRAM = '{$_POST['IDRAM']}', 
		MARCA = '{$_POST['MARCA']}',  
		TIPO = '{$_POST['TIPO']}',
		CAPACIDAD = '{$_POST['CAPACIDAD']}',
		BUS = '{$_POST['BUS']}',
		FECHA_CR = '{$_POST['FECHA_CR']}', 
		HORA_CR = '{$_POST['HORA_CR']}', 
		OBS = '{$_POST['OBS']}' 
		WHERE IDRAM = '{$_POST['id']}'");

		header("location:../ram_actualizar.php");
	};

?>