<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE list_software SET
			ID_SOFT = '{$_POST['ID_SOFT']}',
		 	NOMBRE = '{$_POST['NOMBRE']}',
			VERSION_S = '{$_POST['VERSION_S']}', 
			TIPO = '{$_POST['TIPO']}',
		 	ID_SALON = '{$_POST['ID_SALON']}', 
		 	FECHA_CR = '{$_POST['FECHA_CR']}',
		 	HORA_CR = '{$_POST['HORA_CR']}',
		 	OBS = '{$_POST['OBS']}' 
		 	WHERE ID_SOFT = '{$_POST['id']}'");

		header("location:../listado_software_actualizar.php");
	};

?>