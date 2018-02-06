<?php
	require("../../conectar.php");
	if (isset($_GET['IDPERISFERICO'])) {

		$conexion->query("DELETE FROM perisferico WHERE IDPERISFERICO = '{$_GET['IDPERISFERICO']}'");
		header("location:../perisferico_eliminar.php");
	}

?>