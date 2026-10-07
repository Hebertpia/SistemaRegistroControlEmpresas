<!DOCTYPE html>
<html>
<head>
<meta charset="uft-8">
<link rel="stylesheet" href="estilo_busc_elim.css">
<title>Documento sin titulo</title>
</head>

<body>

<?php
//BUSQUEDA POR NUMERO PATRONAL
    
    require("datos_conec.php");
    $conexion=mysqli_connect($bd_host, $bd_usuario, $bd_contra);
    $busqueda= mysqli_real_escape_string($conexion, $_GET["num_patroid"]);
    if(mysqli_connect_errno()){
        echo "Fallo al conectar a la Base de Datos DUDEA 2.0";
        exit();
    };

    mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la Base de Datos");

    mysqli_set_charset($conexion, "utf8");

    $consulta="SELECT * FROM empresa WHERE Num_patroID='$busqueda'";
    $resultados=mysqli_query($conexion, $consulta);

    while($dato=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
          
        echo "<section class='ins_buscar'>";
        echo "<h2>" . $dato['Razon_social'] . "</h2>";
        echo "<table class='table'>
                <tr>
                  <td class='td'>Número patronal</td>
                  <td class='td2'>" . $dato['Num_patroID'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Razón social</td>
                  <td class='td2'>" . $dato['Razon_social'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Sector</td>
                  <td class='td2'>" . $dato['Sector'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Rif</td>
                  <td class='td2'>" . $dato['Tip_rif'] . "-" .  $dato['Num_rif'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Tipo de empresa</td>
                  <td class='td2'>" . $dato['Tipo_empresa'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Estatus</td>
                  <td class='td2'>" . $dato['Estatus'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Actividad económica</td>
                  <td class='td2'>" . $dato['Activ_econom'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Riesgo</td>
                  <td class='td2'>" . $dato['Riesgo'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Sistema activo</td>
                  <td class='td2'>" . $dato['Sistema_activ'] . "</td>
                </tr>
                <tr>
                  <td class='td'>CI del representante legal</td>
                  <td class='td2'>" . $dato['Nacionalidad'] . "-" . $dato['Repr_legal_CI'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Nombre y apellido del representante legal</td>
                  <td class='td2'>" . $dato['Nom_Ap_Rep_legal'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Monto</td>
                  <td class='td2'>" . $dato['Monto'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Desde</td>
                  <td class='td2'>" . $dato['Desde'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Hasta</td>
                  <td class='td2'>" . $dato['Hasta'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Dirección</td>
                  <td class='td2'>" . $dato['Direccion'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Sector</td>
                  <td class='td2'>" . $dato['Sector'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Punto de referencia</td>
                  <td class='td2'>" . $dato['Punt_ref'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Teléfono de la empresa</td>
                  <td class='td2'>" . $dato['Telf_local_emp'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Correo de la empresa</td>
                  <td class='td2'>" . $dato['Correo_emp'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Correo alternativo</td>
                  <td class='td2'>" . $dato['Correo_altern'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Mes de aprovación</td>
                  <td class='td2'>" . $dato['Mes_aprov'] . "</td>
                </tr>
                <tr>
                  <td class='td'>Año de aprovación</td>
                  <td class='td2'>" . $dato['Año_aprov'] . "</td>
                </tr>
              </table></section>";
    };
    echo "<div class='div' align='center'>
        <form action='insert_eliminar.php'>
            <input class='boton' type='submit' name='eliminar' value='eliminar'>
        </form>
        <form action='index.php' >
            <input class='boton' type='submit' name='menu' value='Volver al inicio'>
        </form>
    </div>";
    echo "";
    mysqli_close($conexion);
 
?>
</body>
</html>