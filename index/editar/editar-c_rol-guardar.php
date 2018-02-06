<?php

require("../../conectar.php");


	if (isset($_POST['envio'])) {

		$conexion->query("UPDATE c_rol SET IDROL = '{$_POST['IDROL']}',
			ROL = '{$_POST['ROL']}',
			IDUSUARIO = '{$_POST['IDUSUARIO']}',
			OBS = '{$_POST['OBS']}'
			WHERE IDROL = '{$_POST['id']}'");

		header("location:../c_rol_actualizar.php");
	};

?>