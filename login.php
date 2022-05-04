<?php

    session_start();
    require 'conexion.php';

    $user = $_POST['usuario'];
    $pass = $_POST['clave'];

    $cnx = new conexion();
    $cnx->conectar();
    $sentencia = "SELECT * FROM usuarios WHERE correo = '".$user."' AND contraseña = '".$pass."';";
    $resultado = $cnx->ejecutar($sentencia);

    if(mysqli_num_rows($resultado)>=1){
        $datos = mysqli_fetch_assoc($resultado);
        $_SESSION['usuario'] = $datos['correo'];
        $_SESSION['id'] = $datos['id'];
        header('location: pokemon.php');
    } else {
        header('location: index.php?validacion=<font color=red>* Usuario o contraseña incorrectos</font>');
    }

?>
