<?php

require("../../conectar.php");


$IDPC_GEN=$_POST['IDPC_GEN'];
$IDBOARD=$_POST['IDBOARD'];
$IDPROCESADOR=$_POST['IDPROCESADOR'];
$IDRAM=$_POST['IDRAM'];
$IDF_PODER=$_POST['IDF_PODER'];
$IDHDD=$_POST['IDHDD'];
$IDUNIDAD_DVD=$_POST['IDUNIDAD_DVD'];
$IDACCESORIO=$_POST['IDACCESORIO'];
$FECHA_CR=$_POST['FECHA_CR'];
$HORA_CR=$_POST['HORA_CR'];
$OBS=$_POST['OBS'];


$insert= "INSERT INTO pc_generico VALUES ('$IDPC_GEN','$IDBOARD','$IDPROCESADOR','$IDRAM','$IDF_PODER','$IDHDD','$IDUNIDAD_DVD','$IDACCESORIO',
'$FECHA_CR','$HORA_CR','$OBS' )";

$resultado= mysqli_query($conexion,$insert) or die("error al insertar datos");
header("location:../pc_genenrico_insertar.php");
mysqli_close($conexion);

?>