<?php

    include("Config.php");

    try {
        	
        $base = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NOMBRE."", DB_USUARIO, DB_CONTRA);
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $base->exec("SET CHARACTER SET ".DB_CHARSET."");
    } catch (Exception $e) {
        die("ERROR" . $e->getMessage());
        echo "Linea Del Error ". $e->getLine();
    }
    
?>