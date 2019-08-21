
<?php
    include("conexion.php");
    try {
        $Id = $_GET["Id"];
        $base = Conectar::Conexion();
        $base->query("DELETE FROM DATOSUSUARIOS WHERE Id = '$Id'");
       
        header("LOCATION:../index.php?borrado=true");
    } catch (Exception $e) {
        die("ERROR" . $e->getMessage());
        echo "Linea Del Error ". $e->getLine();
    }
    
?>