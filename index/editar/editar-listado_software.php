<?php 
  require("../../conectar.php");
  if (isset($_GET['ID_SOFT'])) {
    $datos = $conexion->query("SELECT * FROM list_software WHERE ID_SOFT = '{$_GET['ID_SOFT']}'");
    $union = mysqli_fetch_assoc($datos);

  }
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../../css/index.css">
   <link rel="stylesheet" type="text/css" href="../../css/actualizar.css">
  <script type="text/javascript" src="../../js/validar.js"></script>
  <title>index</title>
</head>
<body>  

<?php 
session_start();
$nom=$_SESSION['usuario'];

if (!isset($_SESSION["usuario"])) {
  header("location:../formulario.php");
}
?>
<nav class="menu">
<ul class="ul-top">
    <li class="menu-ham" onclick="myFunction()">
      <div  class="menu-top"></div>
      <div></div>
      <div class="menu-bottom"></div>
    </li>
    <li class="li-top">
      <span class="usu"><a href="index.php">usuario: <?php echo "$nom" ?></a></span>
    </li>
    <li class="li-top" id="li-top">
      <span class=""><a href="../desconectar.php">Cerrar Cesión</a></span>
    </li>
  </ul>
</nav>

<?php include '../menu2.php';?>

<div class="contenedor" id="contenedor">
  
  <form  name ="formularioContacto" class="form-actualizar" action="editar-listado_software-guardar.php" method="post">
     <div class="div-1">
    <label>ID_SOFT:</label><br>
    <input type="number" id="label" name="ID_SOFT"
    value="<?php echo $union['ID_SOFT']; ?>">
   </div>
   <div>
    <label>NOMBRE:</label><br>
    <input type="text" id="label" name="NOMBRE"
    value="<?php echo $union['NOMBRE']; ?>">
   </div>
   <div>
    <label>VERSION_S:</label><br>
    <input type="text" id="label" name="VERSION_S"
    value="<?php echo $union['VERSION_S']; ?>">
   </div>
   <div>
    <label>TIPO:</label><br>
    <input type="text" id="label" name="TIPO" 
    value="<?php echo $union['TIPO']; ?>">
   </div>
   <div>
    <label>ID_SALON:</label><br>
    <input type="number" id="label" name="ID_SALON"
    value="<?php echo $union['ID_SALON']; ?>">
   </div>
   <div>
    <label>FECHA_CR:</label><br>
    <input type="date" id="label" name="FECHA_CR"
    value="<?php echo $union['FECHA_CR']; ?>">
   </div>
   <div>
    <label>HORA_CR:</label><br>
    <input type="time" id="label" name="HORA_CR"
    value="<?php echo $union['HORA_CR']; ?>">
   </div>
   <div>
    <label>OBS:</label><br>
    <input type="text" id="label" name="OBS"
    value="<?php echo $union['OBS']; ?>">
   </div>

    <div>
    <input type="hidden" name="id" value="<?php echo $union['ID_SOFT']; ?>">
    <input name="envio" class="bot" type="submit" onclick="return validar()" value="EDITAR">
   </div>


  </form>

</div>

</body>

<script type="text/javascript">
  
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
   }
  }

  var m = document.getElementById("menu-contenido");
  var c = document.getElementById("contenedor");
  function myFunction() {
    m.classList.toggle("display-menu");
    c.classList.toggle("display-con");
    
  }

</script>

</html>



