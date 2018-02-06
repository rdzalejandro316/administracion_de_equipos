<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE pc_salones SET 
		ID_SALON = '{$_POST['ID_SALON']}', 
		IDTORRE = '{$_POST['IDTORRE']}',
		SALON = '{$_POST['SALON']}', 
		PROCESADOR = '{$_POST['PROCESADOR']}', 
		RAMTOTAL = '{$_POST['RAMTOTAL']}',
		HDD = '{$_POST['HDD']}',
		CANT_PC = '{$_POST['CANT_PC']}',
		FECHA_CR = '{$_POST['FECHA_CR']}', 
		HORA_CR = '{$_POST['HORA_CR']}', 
		OBS = '{$_POST['OBS']}' 
		WHERE ID_SALON = '{$_POST['id']}'");

		header("location:../pc_salones_actualizar.php");
	};

?>