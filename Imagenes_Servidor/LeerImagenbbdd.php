<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leer IMG</title>
</head>
<body>
    
    <?php

        require_once("Conexion.php");

        $base = Conectar::Conexion();
        $codart = "AR2";
        $fot = $carpeta_destino.$nombre_imagen;
        $sql = "SELECT FOTO FROM ARTICULOS WHERE CODIGOARTICULO = :codart";
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":codart"=>$codart));
        
        while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
            $ruta_img = $fila['FOTO'];
            echo $ruta_img;
        }
           
         

    ?>
    <div>
        
        <img src="<?php echo $ruta_img?>" alt="Imagen del primer articulo" width="25%"/>
    </div>
</body>
</html>