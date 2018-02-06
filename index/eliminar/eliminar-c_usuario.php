<?php
	require("../../conectar.php");
	if (isset($_GET['ID_USUARIO'])) {

		$conexion->query("DELETE FROM c_usuario WHERE ID_USUARIO = '{$_GET['ID_USUARIO']}'");
		header("location:../c_usuario_eliminar.php");
	}

?>