<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE c_usuario SET ID_USUARIO = '{$_POST['ID_USUARIO']}',
			USUARIO = '{$_POST['USUARIO']}',
			CLAVE = '{$_POST['CLAVE']}'
		 	WHERE ID_USUARIO = '{$_POST['id']}'");

		header("location:../c_usuario_actualizar.php");
	};

?>