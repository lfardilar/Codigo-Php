<?php

    class Conectar{

        public static function Conexion(){

            include("Config.php");
            
            try {
        	
                $conexion = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NOMBRE."", DB_USUARIO, DB_CONTRA);
                
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                $conexion->exec("SET CHARACTER SET ".DB_CHARSET."");

            } catch (Exception $e) {
                die("ERROR" . $e->getMessage());
                echo "Linea Del Error ". $e->getLine();
            }
            
            return $conexion;
        }
    }
?>