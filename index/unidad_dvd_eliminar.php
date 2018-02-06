<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
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
  
<div class="con-table">
    
<?php 
require("../conectar.php");
$datos = $conexion->query("SELECT * FROM unidad_dvd");
?>

<table>
  <thead>
  <th>IDUNIDAD_DVD</th><th>MARCA</th><th>MODELO</th>
  <th>TIPO</th><th>FECHA_CR</th>
  <th>HORA_CR</th><th>OBS</th><th>ELIMINAR</th>
  </thead>
  <tbody>
    <?php while($user = mysqli_fetch_array($datos)){ ?>
      <tr>
        <td><?php echo $user['IDUNIDAD_DVD']; ?></td>
        <td><?php echo $user['MARCA']; ?></td>
        <td><?php echo $user['MODELO']; ?></td>
        <td><?php echo $user['TIPO']; ?></td>
        <td><?php echo $user['FECHA_CR']; ?></td>
        <td><?php echo $user['HORA_CR']; ?></td>
        <td><?php echo $user['OBS']; ?></td>
        <td class="eliminar_campo">
        <a href="eliminar/eliminar-dvd.php?IDUNIDAD_DVD=<?php echo $user['IDUNIDAD_DVD']; ?>"
        onclick="return confirm('desea eliminar este campo')">ELIMINAR</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

</div>

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