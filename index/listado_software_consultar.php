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
   <?php require '../conectar.php';?>
<?php

$sql = "SELECT ID_SOFT,NOMBRE,VERSION_S,TIPO,ID_SALON,FECHA_CR,HORA_CR,OBS FROM list_software";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID_SOFT</th><th>NOMBRE</th><th>VERSION_S</th>
     <th>TIPO</th><th>ID_SALON</th><th>FECHA_CR</th>
     <th>HORA_CR</th><th>OBS</th>
     </tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>
         <td>" . $row["ID_SOFT"]. "</td>
         <td>" . $row["NOMBRE"]."</td>
         <td>" . $row["VERSION_S"]."</td>
         <td>" . $row["TIPO"]."</td>
         <td>" . $row["ID_SALON"]."</td>
         <td>" . $row["FECHA_CR"]."</td>
         <td>" . $row["HORA_CR"]."</td>
         <td>" . $row["OBS"].
          "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conexion->close();
?> 
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



