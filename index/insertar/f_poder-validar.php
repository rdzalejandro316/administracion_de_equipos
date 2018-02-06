<?php

require("../../conectar.php");

$IDF_PODER=$_POST['IDF_PODER'];
$MARCA=$_POST['MARCA'];
$MODELO=$_POST['MODELO'];
$VOLTAJE=$_POST['VOLTAJE'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS=$_POST['OBS'];


$insert= "INSERT INTO f_poder VALUES ('$IDF_PODER','$MARCA','$MODELO','$VOLTAJE','$FECHA_CR','$HORA_CR','$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../f_poder_insertar.php");
mysqli_close($conexion);

?>