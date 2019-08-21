<?php

    require("Config.php");

    class Conexion{

        protected $conexion_db;

        public function Conexion(){
            
            $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
            
            if($conexion_db->connect_errno){
                echo "Fallo al conectar a MYSQL: ". $this->conexion_db->connect_error;
                return;
            }

            $this->conexion_db->set_charset(DB_CHARSET);
            
        }
    }


?>