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

        $id = "2";
        $contenido = "";
        $tipo = "";
        require_once("Conexion.php");

        $base = Conectar::Conexion();
        $codart = "AR2";
        $fot = $carpeta_destino.$nombre_imagen;
        $sql = "SELECT * FROM ARCHIVOS WHERE Id = :id";
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":id"=>$id));
        
        while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
          
            $id = $fila["Id"];
            $contenido = $fila["Contenido"];
            $tipo = $fila["Tipo"];

        }
        
        echo "Id: " .$id. "<br>";
        echo "Tipo: " .$tipo. "<br>";
        echo "<img src='data:image/jpeg; base64,". base64_encode($contenido)."'>";

    ?>
    <div>
        
        
    </div>
</body>
</html>