<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo_busc_elim.css">
    <title>Document</title>
</head>

<script type="text/javascript">
 function ConfirmDelete()
 {
  var respuesta = confirm("  Por favor, asegurese de que el número patronal sea el indicado para eliminar.  ¡Los cambios no podran deshacerse!.");
  if (respuesta == true){
    return true;
  }
  else{
    return false;
  }
}
</script>

<body class='body2'>
<section class="form_elim">
<h2 align="center">Eliminación de empresa</h2>
    <form name="form1" method="get" action="insert_eliminar.php" align="center">        
      <input align="center" class="text" type="search" name="busqueda" id="busqueda" placeholder="Introduzca numero patronal" autocomplete="off">
      <input class="boton" type="submit" onclick="return ConfirmDelete()" name="Eliminar" id="Eliminar" value="Eliminar" >
    </form>
</section>
</body>

</html>