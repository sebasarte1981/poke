<?php

class Cuenta{

    public $nombre, $correo, $contraseña;

    public function __construct(){
        require 'conexion.php';
    }

    public function guardar(){

        $connect = new conexion();
        $connect -> conectar();

        $sentencia = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES('$this->nombre', '$this->correo', '$this->contraseña');";

        $resultado = $connect -> ejecutar($sentencia);
        $connect -> cerrar();

        return $resultado;
    }
    
}