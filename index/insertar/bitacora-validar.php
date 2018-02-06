<?php

require("../../conectar.php");

$ID_BITACORA= $_POST['ID_BITACORA'];
$N_EQUIPO=$_POST['N_EQUIPO'];
$DESCRIPCION=$_POST['DESCRIPCION'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS=$_POST['OBS'];



$insert= "INSERT INTO bitacora VALUES ('$ID_BITACORA', '$N_EQUIPO', '$DESCRIPCION',  '$FECHA_CR', '$HORA_CR', '$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../Bitacora_insertar.php");
mysqli_close($conexion);

?>