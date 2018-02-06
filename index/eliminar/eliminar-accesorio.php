<?php
	require("../../conectar.php");
	if (isset($_GET['ID_ACCESORIO'])) {

		$conexion->query("DELETE FROM accesorios_hw WHERE ID_ACCESORIO = '{$_GET['ID_ACCESORIO']}'");
		header("location:../accesorios_hw_eliminar.php");
	}

?>