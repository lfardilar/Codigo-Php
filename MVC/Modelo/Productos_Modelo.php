<?php

    class Productos_Modelo
    {
        private $db;
        private $productos;

        public function __construct(){
            
            require_once("Modelo/Conexion.php");
            
            $this->db = Conectar::Conexion();

            $this->productos = array();

        }

        public function get_productos(){

            $consulta = $this->db->query("SELECT * FROM ARTICULOS");

            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
               $this->productos[] = $fila;
            }

            return $this->productos;
        }
    }
    

?>