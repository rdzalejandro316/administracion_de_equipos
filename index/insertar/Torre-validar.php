<?php

require("../../conectar.php");


$IDTORRE=$_POST['IDTORRE'];
$DESCRIPCION=$_POST['DESCRIPCION'];
$TELEFONO=$_POST['TELEFONO'];
$DIRECCION=$_POST['DIRECCION'];
$ECHA_CR=$_POST['ECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS =$_POST['OBS'];



$insert= "INSERT INTO torre VALUES ('$IDTORRE','$DESCRIPCION','$TELEFONO','$DIRECCION','$FECHA_CR','$HORA_CR','$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../Torre_insertar.php");
mysqli_close($conexion);

?>