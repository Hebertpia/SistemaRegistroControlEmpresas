<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="estilo_busc_elim.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eliminación</title>
</head>

<body class='body2'>
<?php

  require("datos_conec.php");    
  $conexion=mysqli_connect($bd_host, $bd_usuario, $bd_contra);
  $num_patroid= mysqli_real_escape_string($conexion, $_GET["busqueda"]);


  if(mysqli_connect_errno()){
    echo "Fallo al conectar a la Base de Datos BUDEA 2.0";
    exit();
  }

  mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la Base de Datos");
  mysqli_set_charset($conexion, "utf8");

  $consulta2="SELECT * FROM empresa WHERE Num_patroID='$num_patroid'";
  $resultados2=mysqli_query($conexion, $consulta2);
?>
  <section class='ins_elim'>
<?php
  while($dato=mysqli_fetch_array($resultados2, MYSQLI_ASSOC)){
          
    echo "<h3>" . $dato['Razon_social'] . "</h3>";
  }

  $consulta="DELETE FROM empresa WHERE Num_patroID='$num_patroid'";
  $resultados=mysqli_query($conexion, $consulta);

  if($resultados==FALSE){
  echo "<h2>Error al eliminar</h2>";
  }else{
    if(mysqli_affected_rows($conexion)==0){
      echo "<h2>No se ha eliminado ninguna empresa.</h2>";
      }else{
      echo "<h2>La empresa ha sido eliminado con exito.</h2>";
    }
  }
  echo "<form action='index.php'>
  <input class='botons' type='submit' name='menu' value='Volver al inicio'></form>";
?>
  </section>
</body>
</html>