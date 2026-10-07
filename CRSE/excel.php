<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  header("Content-Type: application/xls");
  header("Content-Disposition: attachment; filename= SRCE_" . date('Y:m:d') . ".xls");
//  header("Pragma: no-cache");
//  header("Expires: 0 ");

?>  

<table align="center">
  <tr>
  <th>Número patronal</th>
    <th>Razón social</th>
    <th>Rif</th>
    <th>Tipo de empresa</th>
    <th>Estatus</th>
    <th>Actividad económica</th>
    <th>Riesgo</th>
    <th>Sistema activo</th>
    <th>CI del representante legal</th>
    <th>Nombre y apellido del representante legal</th>
    <th>Monto</th>
    <th>Desde</th>
    <th>Hasta</th>
    <th>Dirección</th>
    <th>Sector</th>
    <th>Punto de referencia</th>
    <th>Teléfono de la empresa</th>
    <th>Correo de la empresa</th>
    <th>Correo alternativo</th>
    <th>Mes de aprovación</th>
    <th>Año de aprovación</th>
    </tr>
<?php

  include ("./datos_conec.php");
  mysqli_set_charset($conexxion, "utf8");
  $sql="SELECT * FROM empresa";
  $ejecutar= mysqli_query($conexxion, $sql);
  while ($fila=mysqli_fetch_array($ejecutar)){

?>
  <tr align="center">
    <td><?php echo $fila[0] ?></td>
    <td><?php echo $fila[1] ?></td>
    <td><?php echo $fila[2] ."-". $fila[3] ?></td>
    <td><?php echo $fila[4] ?></td>
    <td><?php echo $fila[5] ?></td>
    <td><?php echo $fila[6] ?></td>
    <td><?php echo $fila[7] ?></td>
    <td><?php echo $fila[8] ?></td>
    <td><?php echo $fila[9] ."-". $fila[10] ?></td>
    <td><?php echo $fila[11] ?></td>
    <td><?php echo $fila[12] ?></td>
    <td><?php echo $fila[13] ?></td>
    <td><?php echo $fila[14] ?></td>
    <td><?php echo $fila[15] ?></td>
    <td><?php echo $fila[16] ?></td>
    <td><?php echo $fila[17] ?></td>
    <td><?php echo $fila[18] ?></td>
    <td><?php echo $fila[19] ?></td>
    <td><?php echo $fila[20] ?></td>
    <td><?php echo $fila[21] ?></td>
    <td><?php echo $fila[22] ?></td>
  </tr>
  <?php } ?>
  </table><br><br>


<table align="center">
  <tr>
    <th>Morosidad Total</th>
  </tr>

<?php
  include ("./datos_conec.php");

  $consulta="SELECT SUM(Monto) as 'morosidad' FROM empresa";
  $resultados=mysqli_query($conexxion, $consulta);
  $data= mysqli_fetch_array($resultados);
  $morosidad= $data['morosidad'];
?>

  <tr align="center">
    <td><?php echo $morosidad ?></td>
  </tr>
</table>

</body>
</html>



