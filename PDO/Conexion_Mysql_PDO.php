<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $db_host="localhost";
    $db_nombre="datosproyecto";
    $db_password="Leider$.2019";
    $db_usuario="root";

    $conexion = new mysqli($db_host, $db_usuario, $db_password, $db_nombre);
    
    if($conexion->connect_errno){
        echo "Fallo la conexion" . $conexion->connect_errno;
    }else{
        echo "Conexion exitosa";
    }
    //mysqli_set_charset($conexion,'utf8')
    $conexion->set_charset("utf8");
    
    $sql = "SELECT * FROM articulos";

    //$resultado = mysqli_query($conexion, $sql);
    $resultado= $conexion->query($sql);
    
    if($conexion->errno){
        die($conexion->error);
    }

    //while($fila = mysqli_fetch_array($resultado, MYSQL_ASSOC))


    while($fila = $resultado->fetch_assoc()){
        echo "<table align='center'>";
        echo "<tr><td>".$fila['CODIGOARTICULO']."</td>";
          echo "<td>".utf8_decode($fila['NOMBREARTICULO'])."</td>";
          echo "<td>".utf8_decode($fila['SECCION'])."</td>";
          echo "<td>".utf8_decode($fila['IMPORTADO'])."</td>";
          echo "<td>".utf8_decode($fila['PRECIO'])."</td>";
          echo "<td>".utf8_decode($fila['PAISORIGEN'])."</td></tr>";
        echo "</table>";
    }
    //mysqli_close($conexion);
    $conexion->close();
    ?>
</body>
</html>