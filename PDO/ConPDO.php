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
        $base = new PDO("mysql:host=".$db_host.";dbname=".$db_nombre."", $db_usuario, $db_password);
        echo "Conexion OK";
    }catch(Exception $e){
        die("Error: " . $e->GetMessage());
    }

   
    ?>
</body>
</html>