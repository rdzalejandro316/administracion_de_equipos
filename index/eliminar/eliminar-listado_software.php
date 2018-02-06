<?php
	require("../../conectar.php");
	if (isset($_GET['ID_SOFT'])) {

		$conexion->query("DELETE FROM list_software WHERE ID_SOFT = '{$_GET['ID_SOFT']}'");
		header("location:../listado_software_eliminar.php");
	}

?>