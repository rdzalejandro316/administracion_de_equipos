<?php

require("../../conectar.php");

$IDROL=$_POST['IDROL'];
$ROL=$_POST['ROL'];
$IDUSUARIO=$_POST['IDUSUARIO'];
$OBS=$_POST['OBS'];


$insert= "INSERT INTO c_rol VALUES ('$IDROL', '$ROL', '$IDUSUARIO', '$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../c_rol_insertar.php");
mysqli_close($conexion);

?>