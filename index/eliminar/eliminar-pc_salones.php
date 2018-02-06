<?php
	require("../../conectar.php");
	if (isset($_GET['ID_SALON'])) {

		$conexion->query("DELETE FROM pc_salones WHERE ID_SALON = '{$_GET['ID_SALON']}'");
		header("location:../pc_salones_eliminar.php");
	}

?>