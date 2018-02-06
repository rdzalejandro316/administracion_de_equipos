<?php
	require("../../conectar.php");
	if (isset($_GET['IDUNIDAD_DVD'])) {

		$conexion->query("DELETE FROM unidad_dvd WHERE IDUNIDAD_DVD = '{$_GET['IDUNIDAD_DVD']}'");
		header("location:../unidad_dvd_eliminar.php");
	}

?>