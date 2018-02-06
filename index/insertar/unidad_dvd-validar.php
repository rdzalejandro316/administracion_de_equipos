<?php

require("../../conectar.php");

$IDUNIDAD_DVD=$_POST['IDUNIDAD_DVD'];
$MARCA=$_POST['MARCA'];
$MODELO=$_POST['MODELO'];
$TIPO=$_POST['TIPO'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS =$_POST['OBS'];





$insert= "INSERT INTO unidad_dvd VALUES ('$IDUNIDAD_DVD','$MARCA','$MODELO','$TIPO','$FECHA_CR','$HORA_CR','$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../unidad_dvd_insertar.php");
mysqli_close($conexion);

?>