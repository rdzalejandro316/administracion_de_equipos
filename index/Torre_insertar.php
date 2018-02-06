<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
   <link rel="stylesheet" type="text/css" href="../css/actualizar.css">
  <script type="text/javascript" src="../js/validar.js"></script>
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

<?php include 'menu.php';?>

<div class="contenedor" id="contenedor">
  
  <form  name ="formularioContacto" class="form-actualizar" action="insertar/Torre-validar.php" method="post">
     <div class="div-1">
    <label>IDTORRE:</label><br>
    <input type="number" id="label" name="IDTORRE">
   </div>
   <div>
    <label>DESCRIPCION:</label><br>
    <input type="text" id="label" name="DESCRIPCION">
   </div>
   <div>
    <label>TELEFONO:</label><br>
    <input type="text" id="label" name="TELEFONO">
   </div>
   <div>
    <label>DIRECCION:</label><br>
    <input type="text" id="label" name="DIRECCION">
   </div>
   <div>
    <label>FECHA_CR:</label><br>
    <input type="date" id="label" name="FECHA_CR">
   </div>
   <div>
    <label>HORA_CR:</label><br>
    <input type="time" id="label" name="HORA_CR">
   </div>
   <div>
    <label>OBS:</label><br>
    <input type="text" id="label" name="OBS">
   </div>

    <div>
    <input class="bot" type="submit" onclick="return validar()"">
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



