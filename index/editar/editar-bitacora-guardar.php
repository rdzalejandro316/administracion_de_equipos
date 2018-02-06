<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE bitacora SET ID_BITACORA = '{$_POST['ID_BITACORA']}', N_EQUIPO = '{$_POST['N_EQUIPO']}',
		DESCRIPCION = '{$_POST['DESCRIPCION']}', FECHA_CR = '{$_POST['FECHA_CR']}', HORA_CR = '{$_POST['HORA_CR']}', OBS = '{$_POST['OBS']}' WHERE ID_BITACORA = '{$_POST['id']}'");

		header("location:../Bitacora_eliminar.php");
	};

?>