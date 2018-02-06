<?php
	require("../../conectar.php");
	if (isset($_GET['IDROL'])) {

		$conexion->query("DELETE FROM c_rol WHERE IDROL = '{$_GET['IDROL']}'");
		header("location:../c_rol_eliminar.php");
	}

?>