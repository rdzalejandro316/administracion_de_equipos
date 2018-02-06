<?php

require("../../conectar.php");

$ID_SALON=$_POST['ID_SALON'];
$IDTORRE=$_POST['IDTORRE'];
$SALON=$_POST['SALON'];
$PROCESADOR=$_POST['PROCESADOR'];
$RAMTOTAL=$_POST['RAMTOTAL'];
$HDD=$_POST['HDD'];
$CANT_PC=$_POST['CANT_PC'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS= $_POST['OBS'];



$insert= "INSERT INTO pc_salones VALUES ('$ID_SALON','$IDTORRE','$SALON','$PROCESADOR','$RAMTOTAL','$HDD','$CANT_PC','$FECHA_CR','$HORA_CR','$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../pc_salones_insertar.php");
mysqli_close($conexion);

?>