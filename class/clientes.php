<?php
#require_once('conexion.php');

    class clientes
    {
        private $conexion;
        public function __construct()
        {
            require_once('../conexion.php');
            $this->conexion= new conexion();
            $this->conexion->conectar();
        }
        function lista_clientes($valor)
        {
            $query="SELECT * FROM clientes WHERE nom_cli like '%" .$valor. "%'";
            $this->conexion->conexion->set_charset('utf8');
            $resultados=$this->conexion->conexion->query($query);
            $arreglo = array();
            while($re=$resultados->fetch_array(MYSQL_NUM)){
                $arreglo[]=$re;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
$inst = new clientes();
$r=$inst ->lista_clientes('fo');
//print_r($r);
echo json_encode($r);
?>    