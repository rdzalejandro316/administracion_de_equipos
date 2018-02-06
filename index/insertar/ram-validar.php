<?php

require("../../conectar.php");

$IDRAM=$_POST['IDRAM'];
$MARCA=$_POST['MARCA'];
$TIPO=$_POST['TIPO'];
$CAPACIDAD=$_POST['CAPACIDAD'];
$BUS=$_POST['BUS'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS =$_POST['OBS'];








$insert= "INSERT INTO ram VALUES ('$IDRAM','$MARCA','$TIPO','$CAPACIDAD','$BUS','$FECHA_CR','$HORA_CR','$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../ram_insertar.php");
mysqli_close($conexion);

?>