<?php

require("../../conectar.php");


$IDPROCESADOR=$_POST['IDPROCESADOR'];
$PROCESADOR=$_POST['PROCESADOR'];
$MODELO=$_POST['MODELO'];
$VELOCIDAD=$_POST['VELOCIDAD'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS =$_POST['OBS'];






$insert= "INSERT INTO procesador VALUES ('$IDPROCESADOR','$PROCESADOR','$MODELO','$VELOCIDAD','$FECHA_CR','$HORA_CR','$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../procesador_insertar.php");
mysqli_close($conexion);

?>