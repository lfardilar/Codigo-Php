<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css" MEDIA=screen>
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
    echo "<h1>Hola: " .$_SESSION["usuario"]."</h1>";
?>
    <p>Esto es informacion para usuarios registrados</p>
    
    <table>
    
        <tr>
            <td colspan='6'><h1>Zona usuarios registrados</h1></td>
        </tr>
        <tr>
            <td colspan='2'><a href="Usuarios_Registrados2.php">Pagina 1</a></td>
            <td colspan='2'><a href="Usuarios_Registrados3.php">Pagina 1</a></td>
            <td colspan='2'><a href="Usuarios_Registrados4.php">Pagina 1</a></td>
        </tr>
    
    </table>

    <a href="Cierre.php">Cerrar Sesion</a>
</body>
</html>