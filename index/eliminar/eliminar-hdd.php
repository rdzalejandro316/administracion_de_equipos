<?php
	require("../../conectar.php");
	if (isset($_GET['IDHDD'])) {

		$conexion->query("DELETE FROM hdd WHERE IDHDD = '{$_GET['IDHDD']}'");
		header("location:../hdd_eliminar.php");
	}

?>