<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE equipos_salas SET N_EQUIPO = '{$_POST['N_EQUIPO']}', ACTIVO_PC = '{$_POST['ACTIVO_PC']}',
		PC_GENERICO = '{$_POST['PC_GENERICO']}', SALONES = '{$_POST['SALONES']}', 
			FECHA_CR = '{$_POST['FECHA_CR']}',
		 	HORA_CR = '{$_POST['HORA_CR']}',
		  	OBS = '{$_POST['OBS']}' WHERE 
		  	N_EQUIPO = '{$_POST['id']}'");

		header("location:../equipos_salas_actualizar.php");
	};

?>