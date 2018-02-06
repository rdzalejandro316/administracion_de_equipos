<?php
	require("../../conectar.php");
	if (isset($_GET['IDTORRE'])) {

		$conexion->query("DELETE FROM torre WHERE IDTORRE = '{$_GET['IDTORRE']}'");
		header("location:../Torre_eliminar.php");
	}

?>