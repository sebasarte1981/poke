<?php

    require 'classCuenta.php';

    $cuenta[0] = $_GET['nombre'];
    $cuenta[1] = $_GET['correo'];
    $cuenta[2] = $_GET['clave'];

    $cue = new Cuenta();

    $cue->nombre = $cuenta[0];          
    $cue->correo = $cuenta[1];
    $cue->contraseña = $cuenta[2];

    $respuesta = $cue->guardar();

    if ($respuesta == 1){
        $msn = "<div style='font-size:20px;'><font color = green>Cuenta creada</font></div>";
    } else {
        $msn = "<div style='font-size:20px;'><font color = red>No se creo la cuenta</font></div>";
    }

    header('location: index.php?msn='.$msn);

?>