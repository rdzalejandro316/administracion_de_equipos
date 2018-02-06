<?php
	require("../../conectar.php");
	if (isset($_GET['IDBOARD'])) {

		$conexion->query("DELETE FROM board WHERE IDBOARD = '{$_GET['IDBOARD']}'");
		header("location:../board_eliminar.php");
	}

?>