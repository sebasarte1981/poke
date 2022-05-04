<?php

    class conexion{

        private $cnx;

        public function __construct(){
            
        }

        public function conectar() {
            require 'datosConexion.php';
            $this -> cnx = new mysqli($host, $user, $pass, $bd);
            
            if($this -> cnx -> connect_errno){
                echo "error en la conexion".$this -> $cnx -> connect_error;
                exit();
            }
        }

        public function ejecutar($sentencia){
            $resultado = $this ->cnx -> query($sentencia);
            return $resultado;
        }

        public function cerrar(){
            $this ->cnx -> close();
        }
    }
?>