<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo_busc_elim.css">
<title>Pagina Busqueda</title>
</head>
<body class="body1">
  <section class="form_buscar">
    <h2 align="center">Búsqueda de Empresa</h2>
    <form action="insert_buscar_1.php" method="get" align="center">
      <input class="text" type="search" name="buscar" placeholder="Introduzca número patronal" autocomplete="off">
      <input class="boton" type="submit" name="enviando" value="Buscar">
    </form>
    <form action="insert_buscar_2.php" method="get" align="center">
      <input class="text" type="search" name="buscar" placeholder="Introduzca número de rif" autocomplete="off">
      <input class="boton" type="submit" name="enviando" value="Buscar">
    </form>
    <form action="insert_buscar_3.php" method="get" align="center">
      <input class="text" type="search" name="buscar" placeholder="Introduzca número de cedula" autocomplete="off">
      <input class="boton" type="submit" name="enviando" value="Buscar">
    </form>
    <p align="center">Solo es necesario llenar un campo para la consulta</p>

</section>
</body>
</html>