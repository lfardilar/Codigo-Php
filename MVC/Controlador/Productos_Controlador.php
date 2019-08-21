<?php

    require_once("Modelo/Productos_Modelo.php");

    $producto = new Productos_Modelo();

    $matrizProducto = $producto->get_productos();

    require_once("Vista/Productos_View.php");


   

?>