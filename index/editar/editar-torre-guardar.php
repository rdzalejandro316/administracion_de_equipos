<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE torre SET 
		IDTORRE = '{$_POST['IDTORRE']}', 
		DESCRIPCION = '{$_POST['DESCRIPCION']}',
		TELEFONO = '{$_POST['TELEFONO']}', 
		DIRECCION = '{$_POST['DIRECCION']}',
		FECHA_CR = '{$_POST['FECHA_CR']}',
		HORA_CR = '{$_POST['HORA_CR']}', 
		OBS = '{$_POST['OBS']}' 
		WHERE IDTORRE = '{$_POST['id']}'");

		header("location:../Torre_actualizar.php");
	};

?>