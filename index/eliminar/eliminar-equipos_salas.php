<?php
	require("../../conectar.php");
	if (isset($_GET['N_EQUIPO'])) {

		$conexion->query("DELETE FROM equipos_salas WHERE N_EQUIPO = '{$_GET['N_EQUIPO']}'");
		header("location:../equipos_salas_eliminar.php");
	}

?>