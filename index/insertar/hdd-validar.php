<?php

require("../../conectar.php");

$IDHDD=$_POST['IDHDD'];
$MARCA=$_POST['MARCA'];
$CAPACIDAD=$_POST['CAPACIDAD'];
$TIPO=$_POST['TIPO'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS=$_POST['OBS'];


$insert= "INSERT INTO hdd VALUES ('$IDHDD','$MARCA','$CAPACIDAD','$TIPO','$FECHA_CR','$HORA_CR','$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../hdd_insertar.php");
mysqli_close($conexion);

?>