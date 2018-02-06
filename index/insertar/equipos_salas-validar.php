<?php

require("../../conectar.php");

$N_EQUIPO=$_POST['N_EQUIPO'];
$ACTIVO_PC=$_POST['ACTIVO_PC'];
$PC_GENERICO=$_POST['PC_GENERICO'];
$SALONES=$_POST['SALONES'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS=$_POST['OBS'];




$insert= "INSERT INTO equipos_salas VALUES ('$N_EQUIPO','$ACTIVO_PC','$PC_GENERICO','$SALONES','$FECHA_CR','$HORA_CR','$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../equipos_salas_insertar.php");
mysqli_close($conexion);

?>