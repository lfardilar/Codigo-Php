<?php

    require("DevuelveProductos.php");

    $productos = new DevuelveProductos();
    $array_productos = $productos->get_productos();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width:300px;
            margin:auto;
            background-color:#FFC;
            border:2px solid #F00;
            padding:5px;
        }
        td{
            text-align:center;
        }
    </style>
</head>
<body>
    
    <?php
        foreach($array_productos as $elemento){
            
            echo "<table><tr><td>";
            echo  $elemento['CODIGOARTICULO'] ."</td><td>";
            echo  $elemento['SECCION'] ."</td><td>";
            echo  $elemento['NOMBREARTICULO'] ."</td><td>";
            echo  $elemento['PRECIO'] ."</td><td>";
            echo  $elemento['PAISORIGEN'] ."</td><td>";
            echo  $elemento['FECHA'] ."</td><td>";
            echo  $elemento['IMPORTADO'] ."</td></tr></table>";

          
        }
    ?>
</body>
</html>