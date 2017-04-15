<?php
    class conexion
    {
        private $servidor;
        private $usuario;
        private $clave;
        private $basedatos;
        public  $conexion;
        
        public function __construct(){
            $this->servidor = "97.74.31.142";
            $this->usuario = "freenet";
            $this->clave = "Software12";
            $this->basedatos = "freenet";
        }
        
        function conectar(){
            $this->conexion=new mysqli($this->servidor,$this->usuario,$this->clave,$this->basedatos);
        }
        
        function cerrar()
            $this->conexion->close();
    }
?>