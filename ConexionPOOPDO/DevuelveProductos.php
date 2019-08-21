<?php

    require("Conexion.php");

    class DevuelveProductos extends Conexion{

        public function DevuelveProductos(){

            parent::__construct();
        }

        public function get_productos($dato){

            $sql = "SELECT * FROM articulos WHERE PAISORIGEN = '".$dato."'";

            $sentencia = $this->conexion_db->prepare($sql);

            $sentencia->execute(array($sql));

            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            $sentencia->closeCursor();
            
            return $resultado;

            $this->conexion_db = null;
        }

    }

?>