<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Inicio</title>
</head>
<body>
  <div class="div"></div>

  <section class="Menu_botons">
  <h2 align="center">Sistema de Registro y Control de Empresas</h2>

  <form action="form_buscar.php" align="center">
    <input class="botons" type="submit" name="buscar" value="Buscar empresa"></form>

  <form action="form_actualizar.php" align="center" method="POST">
    <input class="botons" type="submit" name="actualizar" value="Actualizacion de datos"></form>

  <form action="form_registro_copy.php" align="center">
    <input class="botons" type="submit" name="registro" value="Registrar empresa"></form>

  <form action="form_eliminar.php" align="center">
    <input class="botons" type="submit" name="eliminar" value="Eliminar empresa"></form>

  <form action="excel.php" align="center">
    <input class="boton_excel" type="submit" value="Descargar SRCE"></form>
  </section>


</body>
</html>