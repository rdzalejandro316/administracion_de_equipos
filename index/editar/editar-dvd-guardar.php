<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE unidad_dvd SET 
		IDUNIDAD_DVD = '{$_POST['IDUNIDAD_DVD']}', 
		MARCA = '{$_POST['MARCA']}', 
		MODELO = '{$_POST['MODELO']}', 
		TIPO = '{$_POST['TIPO']}',
		FECHA_CR = '{$_POST['FECHA_CR']}', 
		HORA_CR = '{$_POST['HORA_CR']}',
		OBS = '{$_POST['OBS']}' 
		WHERE IDUNIDAD_DVD = '{$_POST['id']}'");

		header("location:../unidad_dvd_actualizar.php");
	};

?>