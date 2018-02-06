<?php

require("../../conectar.php");

$IDPERISFERICO=$_POST['IDPERISFERICO'];
$N_EQUIPO=$_POST['N_EQUIPO'];
$ACTIVO=$_POST['ACTIVO'];
$DESCRIPCION=$_POST['DESCRIPCION'];
$MARCA=$_POST['MARCA'];
$MODELO=$_POST['MODELO'];
$TIPO=$_POST['TIPO'];
$SERIAL=$_POST['SERIAL'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS=$_POST['OBS'];




$insert= "INSERT INTO perisferico VALUES ('$IDPERISFERICO','$N_EQUIPO','$ACTIVO','$DESCRIPCION','$MARCA','$MODELO','$TIPO','$SERIAL','$FECHA_CR','$HORA_CR','$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../perisferico_insertar.php");
mysqli_close($conexion);

?>