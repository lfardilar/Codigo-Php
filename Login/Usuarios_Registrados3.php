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
    session_start();

    if(!isset($_SESSION["usuario"])){
        header("LOCATION:Formulario_Login.php");
    }


?>
    <h1>Bienvenido Usuarios</h1>
<?php
    echo "usuario: " .$_SESSION["usuario"];
?>
    <p>Esto es informacion para usuarios registrados</p>
    <a href="Usuarios_Registrados1.php">Volver</a>
    <a href="Cierre.php">Cerrar Sesion</a>
</body>
</html>