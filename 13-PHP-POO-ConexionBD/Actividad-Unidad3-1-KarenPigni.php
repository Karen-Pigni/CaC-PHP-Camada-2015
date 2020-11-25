<?php 

    echo 'CodoACodo - Autora: Karen Pigni - Unidad 3.1 POO';

    class conexionDB{    
        private $host = "localhost";
        private $usuario = "root";
        private $clave = "";
        private $db = "basedeDatos";
        public $conexion;
        public function __construct(){
            $this->conexion = new mysqli($this->host, $this->usuario, $this->clave,$this->db)
            or die(mysql_error());
        }
        //INSERTAR
        public function insertar($tabla, $datos){
            $resultado =    $this->conexion->query("INSERT INTO $tabla VALUES (null,$datos)") or die($this->conexion->error);
            if($resultado)
                return true;
            return false;
        } 
        //LIBERAR CONSULTA
        public function liberarConexion(){
            mysqli_free_result($consulta); 
            mysqli_close($conexion);
        }
    }
    $variable = new conexionDB();
?>