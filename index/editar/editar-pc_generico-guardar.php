<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE pc_generico SET 
		IDPC_GEN = '{$_POST['IDPC_GEN']}', 
		IDBOARD = '{$_POST['IDBOARD']}',
		IDPROCESADOR = '{$_POST['IDPROCESADOR']}', 
		IDRAM = '{$_POST['IDRAM']}',
		IDF_PODER = '{$_POST['IDF_PODER']}',
		IDHDD = '{$_POST['IDHDD']}',
		IDUNIDAD_DVD = '{$_POST['IDUNIDAD_DVD']}',
		IDACCESORIO = '{$_POST['IDACCESORIO']}',
		FECHA_CR = '{$_POST['FECHA_CR']}', 
		HORA_CR = '{$_POST['HORA_CR']}', 
		OBS = '{$_POST['OBS']}'
		 WHERE IDPC_GEN = '{$_POST['id']}'");

		header("location:../pc_genenrico_actualizar.php");
	};

?>