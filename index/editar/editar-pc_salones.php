<?php 
  require("../../conectar.php");
  if (isset($_GET['ID_SALON'])) {
    $datos = $conexion->query("SELECT * FROM pc_salones WHERE ID_SALON = '{$_GET['ID_SALON']}'");
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
  
  <form  name ="formularioContacto" class="form-actualizar" action="editar-pc_salones-guardar.php" method="post">
     <div class="div-1">
    <label>ID_SALON:</label><br>
    <input type="number" id="label" name="ID_SALON"
    value="<?php echo $union['ID_SALON']; ?>">
   </div>
   <div>
    <label>IDTORRE:</label><br>
    <input type="number" id="label" name="IDTORRE"
    value="<?php echo $union['IDTORRE']; ?>">
   </div>
   <div>
    <label>SALON:</label><br>
    <input type="text" id="label" name="SALON"
    value="<?php echo $union['SALON']; ?>">
   </div>
   <div>
    <label>PROCESADOR:</label><br>
    <input type="text" id="label" name="PROCESADOR"
    value="<?php echo $union['PROCESADOR']; ?>">
   </div>
   <div>
    <label>RAMTOTAL:</label><br>
    <input type="text" id="label" name="RAMTOTAL"
    value="<?php echo $union['RAMTOTAL']; ?>">
   </div>
   <div>
    <label>HDD:</label><br>
    <input type="text" id="label" name="HDD"
    value="<?php echo $union['HDD']; ?>">
   </div>
   <div>
    <label>CANT_PC:</label><br>
    <input type="text" id="label" name="CANT_PC"
    value="<?php echo $union['CANT_PC']; ?>">
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
    <input type="hidden" name="id" value="<?php echo $union['ID_SALON']; ?>">
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



