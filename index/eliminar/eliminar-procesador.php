<?php
	require("../../conectar.php");
	if (isset($_GET['IDPROCESADOR'])) {

		$conexion->query("DELETE FROM procesador WHERE IDPROCESADOR = '{$_GET['IDPROCESADOR']}'");
		header("location:../procesador_eliminar.php");
	}

?>