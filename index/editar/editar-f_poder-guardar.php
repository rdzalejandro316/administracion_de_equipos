<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE f_poder SET IDF_PODER = '{$_POST['IDF_PODER']}', MARCA = '{$_POST['MARCA']}',
			MODELO = '{$_POST['MODELO']}', 
			VOLTAJE = '{$_POST['VOLTAJE']}', 
			FECHA_CR = '{$_POST['FECHA_CR']}', 
			HORA_CR = '{$_POST['HORA_CR']}',
			OBS = '{$_POST['OBS']}' 
			WHERE IDF_PODER = '{$_POST['id']}'");

		header("location:../f_poder_actualizar.php");
	};

?>