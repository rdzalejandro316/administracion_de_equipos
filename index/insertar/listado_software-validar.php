<?php

require("../../conectar.php");


$ID_SOFT=$_POST['ID_SOFT'];
$NOMBRE=$_POST['NOMBRE'];
$VERSION_S=$_POST['VERSION_S'];
$TIPO=$_POST['TIPO'];
$ID_SALON=$_POST['ID_SALON'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS=$_POST['OBS'];

$insert= "INSERT INTO list_software VALUES ('$ID_SOFT','$NOMBRE','$VERSION_S','$TIPO','$ID_SALON','$FECHA_CR','$HORA_CR','$OBS' )";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../listado_software_insertar.php");
mysqli_close($conexion);

?>