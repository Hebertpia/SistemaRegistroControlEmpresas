<!DOCTYPE html>
<html>
<head>
<meta charset="uft-8">
<title>Documento sin titulo</title>
<link rel="stylesheet" href="estilo_actualizar.css">
</head>

<body class='body2'>

<?php
//BUSQUEDA POR NUMERO PATRONAL

    require("datos_conec.php");
    
    $conexion=mysqli_connect($bd_host, $bd_usuario, $bd_contra);
    $busqueda= mysqli_real_escape_string($conexion, $_GET["buscar"]);
    if(mysqli_connect_errno()){
        echo "Fallo al conectar a la Base de Datos DUDEA 2.0";
        exit();
    }

    mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la Base de Datos");

    mysqli_set_charset($conexion, "utf8");

    $consulta="SELECT * FROM empresa WHERE Num_patroID='$busqueda'";
    $resultados=mysqli_query($conexion, $consulta);

    while($dato=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
        //echo "<form align='center'>";
        //$x=$dato['Num_patroID'];
        echo "<section class='insert_actualizar'><br>";

        echo "<form action='actualizar.php' method='get'>";
        echo "<h2>Actualización de datos</h2>";
        echo "<h4>Número patronal: </h4>" . "<input class='text' type='text' name='num_patroid' value='" . $dato['Num_patroID'] . "' autocomplete='off'><br><br>";
        echo "<h4>Razon social: </h4>" . "<input class='text' type='text' name='razon_social' value='" . $dato['Razon_social'] . "' autocomplete='off'><br><br>";

        echo "<h4>Rif: </h4>" .
        "<select class='text2' name='tip_rif' id='tip_rif'>
                <option class='option'> " . $dato['Tip_rif'] . " </option>
                <option>V</option>
                <option>J</option>
                <option>E</option>
                <option>P</option>
                <option>G</option>
            </select>" .
            "<input class='text3' type='text' name='num_rif' value='" . $dato['Num_rif'] . "' autocomplete='off'><br><br>";

        echo "<h4>Tipo de empresa: </h4>" .
        "<select class='text' name='tipo_empresa' id='tipo_empresa'>
                <option class='option'> " . $dato['Tipo_empresa'] . " </option>
                <option>Privada</option>
                <option>Publica</option>
                <option>Unipersonal</option>
                <option>Mixta</option>
            </select><br><br>";

        echo "<h4>Estatus: </h4>" .
        "<select class='text' name='estatus' id='estatus'>
                <option class='option'> " . $dato['Estatus'] . " </option>
                <option>Activa</option>
                <option>Temporal</option>
                <option>Inactiva</option>
                <option>Inactiva Bloc Definitivo</option>
            </select><br><br>";

        echo "<h4>Actividad economica: </h4>" . "<input class='text' type='text' name='activ_econom' value='" . $dato['Activ_econom'] . "' autocomplete='off'><br><br>";

        echo "<h4>Riesgo: </h4>" .
        "<select class='text' name='riesgo' id='riesgo'>
                <option class='option'> " . $dato['Riesgo'] . " </option>
                <option>Minimo</option>
                <option>Medio</option>
                <option>Maximo</option>
            </select><br><br>";

        echo "<h4>Sistema activo: </h4>" .
        "<select class='text' name='sistema_activ' id='sistema_activ'>
                <option class='option'> " . $dato['Sistema_activ'] . " </option>
                <option>Tiuna</option>
                <option>Tradicional</option>
                <option>Sira</option>
            </select><br><br>";

        echo "<h4>CI del representante legal: </h4>" .
        "<select class='text2' name='nacionalidad' id='nacionalidad'>
                <option class='option'> " . $dato['Nacionalidad'] . " </option>
                <option>V</option>
                <option>E</option>
            </select>"        
        . "<input class='text3' type='text' name='repr_legal_ci' value='" . $dato['Repr_legal_CI'] . "' autocomplete='off'><br><br>";

        echo "<h4>Nombre y apellido del representante legal: </h4>" . "<input class='text' type='text' name='nom_ap_rep_legal' value='" . $dato['Nom_Ap_Rep_legal'] . "' autocomplete='off'><br><br>";
        echo "<h4>Monto: </h4>" . "<input class='text' type='number' name='monto' value='" . $dato['Monto'] . "'><br><br>";
        echo "<h4>Desde: </h4>" . "<input class='text' type='date' name='desde' value='" . $dato['Desde'] . "'><br><br>";
        echo "<h4>Hasta: </h4>" . "<input class='text' type='date' name='hasta' value='" . $dato['Hasta'] . "'><br><br>";
        echo "<h4>Dirección: </h4>" . "<input class='text' type='text' name='direccion' value='" . $dato['Direccion'] . "' autocomplete='off'><br><br>";
        echo "<h4>Sector: </h4>" . "<input class='text' type='text' name='sector' value='" . $dato['Sector'] . "' autocomplete='off'><br><br>";
        echo "<h4>Punto de referencia: </h4>" . "<input class='text' type='text' name='punt_ref' value='" . $dato['Punt_ref'] . "' autocomplete='off'><br><br>";
        echo "<h4>Teléfono de la empresa: </h4>" . "<input class='text' type='tel' name='telf_local_emp' value='" . $dato['Telf_local_emp'] . "' autocomplete='off'><br><br>";
        echo "<h4>Correo de la empresa: </h4>" . "<input class='text' type='email' name='correo_emp' value='" . $dato['Correo_emp'] . "' autocomplete='off'><br><br>";
        echo "<h4>Correo alternativo: </h4>" . "<input class='text' type='email' name='correo_altern' value='" . $dato['Correo_altern'] . "' autocomplete='off'><br><br>";

        echo "<h4>Mes de aprobación: </h4>" .
        "<select class='text' name='mes_aprov' id='mes_aprov'>
                <option class='option'> " . $dato['Mes_aprov'] . " </option>
                <option>Enero</option>
                <option>Febrero</option>
                <option>Marzo</option>
                <option>Abril</option>
                <option>Mayo</option>
                <option>Junio</option>
                <option>Julio</option>
                <option>Agosto</option>
                <option>Septiembre</option>
                <option>Octubre</option>
                <option>Noviembre</option>
                <option>Diciembre</option>
            </select>";

        echo "<h4 class='h4año'>Año de aprobación: </h4>" . "<input class='text' type='text' name='año_aprov' value='" . $dato['Año_aprov'] . "' autocomplete='off'><br><br>";
        
        echo "<input class='botons' type='submit' name='enviando' value='Actualizar'>";
        echo "</form>";
    };
    echo "<form action='index.php'>
    <input class='botons' type='submit' name='menu' value='Volver al inicio'></form></section>";
    mysqli_close($conexion);
?>
</body>
</html>