<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE board SET IDBOARD = '{$_POST['IDBOARD']}', MARCA = '{$_POST['MARCA']}',
		 MODELO = '{$_POST['MODELO']}', FECHA_CR = '{$_POST['FECHA_CR']}', HORA_CR = '{$_POST['HORA_CR']}', OBS = '{$_POST['OBS']}' WHERE IDBOARD = '{$_POST['id']}'");

		header("location:../board_actualizar.php");
	};

?>