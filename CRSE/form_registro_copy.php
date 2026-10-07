<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo_registros.css">
    <title>Registro de empresa</title>
</head>
<body class='body1'>
    <section class="form">
    <form name="form1" method="get" action="insert_registro.php">
    <h2 class="form_titulo">Registro de empresa</h2>
    <div class="contenedor">
        <div class="form_grupo">
            <input class="form_input" type="text" name="num_patroid" id="num_patroid" placeholder=" " required="" autocomplete="off">
            <label for="num_patroid" class="form_label">Número patronal:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="text" name="razon_social" id="razon_social" placeholder=" " required="" autocomplete="off">
            <label for="razon_social" class="form_label">Razon social:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <label for="tip_rif" class="form_label2">Tipo de Rif:</label>
            <select class="form_input" name="tip_rif" id="tip_rif">
                <option class="option"></option>
                <option>V</option>
                <option>J</option>
                <option>E</option>
                <option>P</option>
                <option>G</option>
            </select>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="number" name="num_rif" id="num_rif" placeholder=" " required="" autocomplete="off">
            <label for="num_rif" class="form_label">Numero de rif:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <label for="tipo_empresa" class="form_label2">Tipo de empresa:</label>
            <select class="form_input" name="tipo_empresa" id="tipo_empresa">
                <option></option>
                <option>Privada</option>
                <option>Publica</option>
                <option>Unipersonal</option>
                <option>Mixta</option>
            </select>
        </div>
        <div class="form_grupo">
            <label for="estatus" class="form_label2">Estatus:</label>
            <select class="form_input" name="estatus" id="estatus">
                <option></option>
                <option>Activa</option>
                <option>Temporal</option>
                <option>Inactiva</option>
                <option>Inactiva Bloc Definitivo</option>
            </select>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="text" name="activ_econom" id="activ_econom" placeholder=" " required=""  autocomplete="off">
            <label for="activ_econom" class="form_label">Actividad economica:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <label for="riesgo" class="form_label2">Riesgo:</label>
            <select class="form_input" name="riesgo" id="riesgo">
                <option></option>
                <option>Minimo</option>
                <option>Medio</option>
                <option>Maximo</option>
            </select>
        </div>
        <div class="form_grupo">
            <label for="sistema_activ" class="form_label2">Sistema activo:</label>
            <select class="form_input" name="sistema_activ" id="sistema_activ">
                <option></option>
                <option>Tiuna</option>
                <option>Tradicional</option>
                <option>Sira</option>
            </select>
        </div>
        <div class="form_grupo">
            <label for="nacionalidad" class="form_label2">Nacionalidad:</label>
            <select class="form_input" name="nacionalidad" id="nacionalidad">
                <option class="option"></option>
                <option>V</option>
                <option>E</option>
            </select>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="number" name="repr_legal_ci" id="repr_legal_ci" placeholder=" " required="" autocomplete="off">
            <label for="repr_legal_ci" class="form_label">Cédula del presentante legal:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="text" name="nom_ap_rep_legal" id="nom_ap_rep_legal" placeholder=" " required="" autocomplete="off">
            <label for="nom_ap_rep_legal" class="form_label">Nombre y apellido del representante legal:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="number" name="monto" id="monto" placeholder=" " required="">
            <label for="onto" class="form_label">Monto:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="date" name="desde" id="desde" placeholder=" " required="" autocomplete="off">
            <label for="desde" class="form_label">Desde:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="date" name="hasta" id="hasta" placeholder=" " required="" autocomplete="off">
            <label for="hasta" class="form_label">Hasta:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
        <textarea class="form_input" name="direccion" id="direccion" placeholder=" " cols="10" rows="3" required=""  autocomplete="off"></textarea>
            <label for="direccion" class="form_label">Direccion:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="text" name="sector" id="sector" placeholder=" " required="" autocomplete="off">
            <label for="sector" class="form_label">Sector:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="text" name="punt_ref" id="punt_ref" placeholder=" " required="" autocomplete="off">
            <label for="punt_ref" class="form_label">Punto de referencia:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="tel" name="telf_local_emp" id="telf_local_emp" placeholder=" " required="" autocomplete="off">
            <label for="telf_local_emp" class="form_label">Telefono de la empresa:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="email" name="correo_emp" id="correo_emp" placeholder=" " required="" autocomplete="off">
            <label for="correo_emp" class="form_label">Correo de la empresa:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="email" name="correo_altern" id="correo_altern" placeholder=" " autocomplete="off">
            <label for="correo_altern" class="form_label">Correo alternativo:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <label for="mes_aprov" class="form_label2">Mes de aprobación:</label>
            <select class="form_input" name="mes_aprov" id="mes_aprov" required="">
                <option></option>
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
            </select>
        </div>
        <div class="form_grupo">
            <input class="form_input" type="text" name="año_aprov" id="año_aprov" placeholder=" " required="" autocomplete="off">
            <label for="año_aprov" class="form_label">Año de aprobacion:</label>
            <span class="form_line"></span>
        </div>
        <input type="reset" class="form_boton" id="borrar" value="Limpiar">
        <input type="submit" class="form_boton" id="enviar" value="Registrar">    
    </div> 
    </form>


    <form action="index.php">
        <input type="submit" class="form_boton" value="Volver al inicio">
    </form></section>
</body>
</html>