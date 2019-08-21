<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrar</title>
<script src="js/package/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="js/package/dist/sweetalert2.min.css">
</head>

<body>

<?php
    include("conexion.php");
    try {
        $Id = $_GET["Id"];
        
        $base->query("DELETE FROM DATOSUSUARIOS WHERE Id = '$Id'");
        echo "<script>BorradoExitoso()</script>";
        header("LOCATION:index.php?borrado=true");
    } catch (Exception $e) {
        die("ERROR" . $e->getMessage());
        echo "Linea Del Error ". $e->getLine();
    }
    
?>
</body>
</html>