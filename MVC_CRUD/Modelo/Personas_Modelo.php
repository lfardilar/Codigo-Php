<?php

    class Personas_Modelo
    {
        private $db;
        private $personas;

        public function __construct(){
            
            require_once("Modelo/Conexion.php");
            
            $this->db = Conectar::Conexion();

            $this->personas = array();

        }

        public function get_personas(){

            require("Paginacion.php");
            $consulta = $this->db->query("SELECT * FROM DATOSUSUARIOS Limit $Emp_Des ,$TamPag");

            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
               $this->personas[] = $fila;
            }

            return $this->personas;
        }
    }
    

?>