<?php

require("../../conectar.php");

$IDBOARD=$_POST['IDBOARD'];
$MARCA=$_POST['MARCA'];
$MODELO=$_POST['MODELO'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS=$_POST['OBS'];


$insert= "INSERT INTO board VALUES ('$IDBOARD', '$MARCA', '$MODELO', '$FECHA_CR', '$HORA_CR', '$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../board_insertar.php");
mysqli_close($conexion);

?>