<?php

require("../../conectar.php");

$USUARIO=$_POST['USUARIO'];
$CLAVE=$_POST['CLAVE'];
$ID_USUARIO=$_POST['ID_USUARIO'];


$insert= "INSERT INTO c_usuario VALUES ('$USUARIO', '$CLAVE', '$ID_USUARIO')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../c_usuario_insertar.php");
mysqli_close($conexion);

?>