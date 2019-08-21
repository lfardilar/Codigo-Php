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
         try{
            $busqueda = $_GET['Buscar'];
            $base = new PDO("mysql:host=".$db_host.";dbname=".$db_nombre."", $db_usuario, $db_password);
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $base->exec("SET CHARACTER SET utf8");
            
            $sql = "SELECT CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, PAISORIGEN FROM articulos WHERE NOMBREARTICULO = ?";
            
            $resultado = $base->prepare($sql);
            
            $resultado->execute(array($busqueda));
            
            while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
                echo "CODIGOARTICULO: ". $registro['CODIGOARTICULO'].' SECCION: '.$registro['SECCION'].' NOMBREARTICULO: '.$registro['NOMBREARTICULO'].' PRECIO: '.$registro['PRECIO'].' PAISORIGEN: '.$registro['PAISORIGEN']."<br>";
            }
            
            $resultado->closeCursor();

         }catch(Exception $e){
             die("Error: " . $e->GetMessage());
         }
    ?>
</body>
</html>