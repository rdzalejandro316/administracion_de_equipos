<?php
	require("../../conectar.php");
	if (isset($_GET['IDF_PODER'])) {

		$conexion->query("DELETE FROM f_poder WHERE IDF_PODER = '{$_GET['IDF_PODER']}'");
		header("location:../f_poder_eliminar.php");
	}

?>