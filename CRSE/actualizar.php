<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_actualizar.css">
    <title>Document</title>
</head>
<body class='body3'>
<?php

    require("datos_conec.php");    

    $conexion=mysqli_connect($bd_host, $bd_usuario, $bd_contra);
    if(mysqli_connect_errno()){
        echo "Fallo al conectar a la Base de Datos DUDEA 2.0";
        exit();
    }
    $num_patroid= mysqli_real_escape_string($conexion, $_GET["num_patroid"]);
    $razon_social= mysqli_real_escape_string($conexion, $_GET["razon_social"]);
    $tip_rif= mysqli_real_escape_string($conexion, $_GET["tip_rif"]);
    $num_rif= mysqli_real_escape_string($conexion, $_GET["num_rif"]);
    $tipo_empresa= mysqli_real_escape_string($conexion, $_GET["tipo_empresa"]);
    $estatus= mysqli_real_escape_string($conexion, $_GET["estatus"]);
    $activ_econom= mysqli_real_escape_string($conexion, $_GET["activ_econom"]);
    $riesgo= mysqli_real_escape_string($conexion, $_GET["riesgo"]);
    $sistema_activ= mysqli_real_escape_string($conexion, $_GET["sistema_activ"]);
    $nacionalidad= mysqli_real_escape_string($conexion, $_GET["nacionalidad"]);
    $repr_legal_ci= mysqli_real_escape_string($conexion, $_GET["repr_legal_ci"]);
    $nom_ap_rep_legal= mysqli_real_escape_string($conexion, $_GET["nom_ap_rep_legal"]);
    $monto= mysqli_real_escape_string($conexion, $_GET["monto"]);
    $desde= mysqli_real_escape_string($conexion, $_GET["desde"]);
    $hasta= mysqli_real_escape_string($conexion, $_GET["hasta"]);
    $direccion= mysqli_real_escape_string($conexion, $_GET["direccion"]);
    $sector= mysqli_real_escape_string($conexion, $_GET["sector"]);
    $punt_ref= mysqli_real_escape_string($conexion, $_GET["punt_ref"]);
    $telf_local_emp= mysqli_real_escape_string($conexion, $_GET["telf_local_emp"]);
    $correo_emp= mysqli_real_escape_string($conexion, $_GET["correo_emp"]);
    $correo_altern= mysqli_real_escape_string($conexion, $_GET["correo_altern"]);
    $mes_aprov= mysqli_real_escape_string($conexion, $_GET["mes_aprov"]);
    $año_aprov= mysqli_real_escape_string($conexion, $_GET["año_aprov"]);

    mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la Base de Datos");
    mysqli_set_charset($conexion, "utf8");

    $consulta= "UPDATE empresa SET Razon_social='$razon_social', 
    Tip_rif='$tip_rif', Num_rif='$num_rif', Tipo_empresa='$tipo_empresa', Estatus='$estatus', 
    Activ_econom='$activ_econom', Riesgo='$riesgo', Sistema_activ='$sistema_activ', 
    Nacionalidad='$nacionalidad', Repr_legal_CI='$repr_legal_ci', Nom_Ap_Rep_legal='$nom_ap_rep_legal', 
    Monto='$monto', Desde='$desde', Hasta='$hasta', Direccion='$direccion', Sector='$sector', 
    Punt_ref='$punt_ref', Telf_local_emp='$telf_local_emp', Correo_emp='$correo_emp', 
    Correo_altern='$correo_altern', Mes_aprov='$mes_aprov', Año_aprov='$año_aprov' 
    WHERE Num_patroID='$num_patroid'";
 
    $resultados=mysqli_query($conexion, $consulta);
    if($resultados==FALSE){
        echo "Error en la consulta";
    }else{
        echo "<section class='ins_buscar'>";
        echo "<h2>" . $razon_social . "</h2>";
        echo "<table class='table'>
        <tr>
            <td class='td'>Número patronal</td>
            <td class='td2'>" . $num_patroid . "</td>
        </tr>
        <tr>
            <td class='td'>Razón social</td>
            <td class='td2'>" . $razon_social . "</td>
        </tr>
        <tr>
            <td class='td'>Rif</td>
            <td class='td2'>" . $tip_rif . "-" .  $num_rif . "</td>
        </tr>
        <tr>
            <td class='td'>Tipo de empresa</td>
            <td class='td2'>" . $tipo_empresa . "</td>
        </tr>
        <tr>
            <td class='td'>Estatus</td>
            <td class='td2'>" . $estatus . "</td>
        </tr>
        <tr>
            <td class='td'>Actividad económica</td>
            <td class='td2'>" . $activ_econom . "</td>
        </tr>
        <tr>
            <td class='td'>Riesgo</td>
            <td class='td2'>" . $riesgo . "</td>
        </tr>
        <tr>
            <td class='td'>Sistema activo</td>
            <td class='td2'>" . $sistema_activ . "</td>
        </tr>
        <tr>
            <td class='td'>CI del representante legal</td>
            <td class='td2'>" . $nacionalidad . "-" . $repr_legal_ci . "</td>
        </tr>
        <tr>
            <td class='td'>Nombre y apellido del representante legal</td>
            <td class='td2'>" . $nom_ap_rep_legal . "</td>
        </tr>
        <tr>
            <td class='td'>Monto</td>
            <td class='td2'>" . $monto . "</td>
        </tr>
        <tr>
            <td class='td'>Desde</td>
            <td class='td2'>" . $desde . "</td>
        </tr>
        <tr>
            <td class='td'>Hasta</td>
            <td class='td2'>" . $hasta . "</td>
        </tr>
        <tr>
            <td class='td'>Dirección</td>
            <td class='td2'>" . $direccion . "</td>
        </tr>
        <tr>
            <td class='td'>Sector</td>
            <td class='td2'>" . $sector . "</td>
        </tr>
        <tr>
            <td class='td'>Punto de referencia</td>
            <td class='td2'>" . $punt_ref . "</td>
        </tr>
        <tr>
            <td class='td'>Teléfono de la empresa</td>
            <td class='td2'>" . $telf_local_emp . "</td>
        </tr>
        <tr>
            <td class='td'>Correo de la empresa</td>
            <td class='td2'>" . $correo_emp . "</td>
        </tr>
        <tr>
            <td class='td'>Correo alternativo</td>
            <td class='td2'>" . $correo_altern . "</td>
        </tr>
        <tr>
            <td class='td'>Mes de aprobación</td>
            <td class='td2'>" . $mes_aprov . "</td>
        </tr>
        <tr>
            <td class='td'>Año de aprobación</td>
            <td class='td2'>" . $año_aprov . "</td>
        </tr>
        </table>";
    }
    echo "<form action='index.php'>
    <input class='boton' type='submit' name='menu' value='Volver al inicio'></form></section>";

    
?>
</body>
</html>