<?php

    require("Config.php");

    class Conexion{

        protected $conexion_db;

        public function Conexion(){
            
            try{

                $this->conexion_db = new PDO ("mysql:host=".DB_HOST."; dbname=".DB_NOMBRE, DB_USUARIO, DB_CONTRA);

                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->conexion_db->exec("SET CHARACTER SET ".DB_CHARSET);

            }catch(Exception $e){
                echo "La linea de error es: " . $e->getLine();
            }
        }
    }


?>