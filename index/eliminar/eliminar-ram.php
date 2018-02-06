<?php
	require("../../conectar.php");
	if (isset($_GET['IDRAM'])) {

		$conexion->query("DELETE FROM ram WHERE IDRAM = '{$_GET['IDRAM']}'");
		header("location:../ram_eliminar.php");
	}

?>