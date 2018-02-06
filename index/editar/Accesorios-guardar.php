<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE accesorios_hw SET ID_ACCESORIO = '{$_POST['ID_ACCESORIO']}', DESCRIPCION = '{$_POST['DESCRIPCION']}',
		MARCA = '{$_POST['MARCA']}', MODELO = '{$_POST['MODELO']}', TIPO = '{$_POST['TIPO']}', FECHA_CR = '{$_POST['FECHA_CR']}', HORA_CR = '{$_POST['HORA_CR']}', OBS = '{$_POST['OBS']}' WHERE ID_ACCESORIO = '{$_POST['id']}'");

		header("location:../accesorios_hw_actualizar.php");
	};

?>