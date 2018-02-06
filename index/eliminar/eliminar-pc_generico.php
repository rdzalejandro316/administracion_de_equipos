<?php
	require("../../conectar.php");
	if (isset($_GET['IDPC_GEN'])) {

		$conexion->query("DELETE FROM pc_generico WHERE IDPC_GEN = '{$_GET['IDPC_GEN']}'");
		header("location:../pc_genenrico_eliminar.php");
	}

?>