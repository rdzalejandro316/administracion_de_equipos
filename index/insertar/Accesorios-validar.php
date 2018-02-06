<?php

require("../../conectar.php");

$ID_ACCESORIO= $_POST['ID_ACCESORIO'];
$DESCRIPCION=$_POST['DESCRIPCION'];
$MARCA=$_POST['MARCA'];
$MODELO=$_POST['MODELO'];
$TIPO=$_POST['TIPO'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS=$_POST['OBS'];

$insert= "INSERT INTO accesorios_hw VALUES ('$ID_ACCESORIO', '$DESCRIPCION', '$MARCA', '$MODELO', '$TIPO', '$FECHA_CR', '$HORA_CR', '$OBS')";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../Accesorios_hw_insertar.php");
mysqli_close($conexion);

?>