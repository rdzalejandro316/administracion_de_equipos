<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE procesador SET 
		IDPROCESADOR = '{$_POST['IDPROCESADOR']}', 
		PROCESADOR = '{$_POST['PROCESADOR']}',
		MODELO = '{$_POST['MODELO']}', 
		VELOCIDAD = '{$_POST['VELOCIDAD']}',
		FECHA_CR = '{$_POST['FECHA_CR']}',
		HORA_CR = '{$_POST['HORA_CR']}',
		OBS = '{$_POST['OBS']}' 
		WHERE IDPROCESADOR = '{$_POST['id']}'");

		header("location:../procesador_actualizar.php");
	};

?>