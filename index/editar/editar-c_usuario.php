<?php 
  require("../../conectar.php");
  if (isset($_GET['ID_USUARIO'])) {
    $datos = $conexion->query("SELECT * FROM c_usuario WHERE ID_USUARIO = '{$_GET['ID_USUARIO']}'");
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
      <span class="usu"><a href="../index.php">usuario: <?php echo "$nom" ?></a></span>
    </li>
    <li class="li-top" id="li-top">
      <span class=""><a href="../../desconectar.php">Cerrar Cesión</a></span>
    </li>
  </ul>
</nav>

<?php include '../menu2.php';?>

<div class="contenedor" id="contenedor">
  
  <form  name ="formularioContacto" class="form-actualizar" action="editar-c_usuario-guardar.php" method="post">
     <div class="div-1">
    <label>USUARIO:</label><br>
    <input type="text" id="label" name="USUARIO"
    value="<?php echo $union['USUARIO']; ?>">
   </div>
   <div>
    <label>CLAVE:</label><br>
    <input type="text" id="label" name="CLAVE"
    value="<?php echo $union['CLAVE']; ?>">
   </div>
   <div>
    <label>ID_USUARIO:</label><br>
    <input type="number" id="label" name="ID_USUARIO"
    value="<?php echo $union['ID_USUARIO']; ?>">
   </div>

    <div>
    <input type="hidden" name="id" value="<?php echo $union['ID_USUARIO']; ?>">
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



