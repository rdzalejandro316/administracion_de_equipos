<?php
	require("../../conectar.php");
	if (isset($_GET['ID_BITACORA'])) {

		$conexion->query("DELETE FROM bitacora WHERE ID_BITACORA = '{$_GET['ID_BITACORA']}'");
		header("location:../Bitacora_eliminar.php");
	}

?>