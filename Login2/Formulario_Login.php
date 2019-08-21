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
if(isset($_POST["Enviar"])){
    define("DB_HOST", "localhost");

    define("DB_USUARIO", "root");

    define("DB_CONTRA", "Leider$.2019");

    define("DB_NOMBRE", "datosproyecto");

    define("DB_CHARSET", "utf8");
        try{
            $base = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NOMBRE."", DB_USUARIO, DB_CONTRA);
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS = :login AND PASSWORD = :password";

            $resultado = $base->prepare($sql);

            $login = htmlentities(addslashes($_POST['Login']));

            $password = htmlentities(addslashes($_POST['Password']));

            $resultado->bindValue(":login", $login);

            $resultado->bindValue(":password", $password);

            $resultado->execute();
            
            $numero_registro = $resultado->rowCount();

            if($numero_registro != 0){
                
                session_start();
                $_SESSION['usuario'] = $login;

            }else{
                echo "Error Usuario o Contraseña Incorrectos";
            }

        }catch(Exception $e){

            die("Error: " . $e->getMessage());
        }
    }
        if(!isset($_SESSION["usuario"])){
            include("Formulario.php");
        }else{
            echo "<h1>Usuario: " . $_SESSION["usuario"]."</h1>";
        }
       
    ?>
    <h1>Contenido de la Web</h1>
    <table>
        <tr>
            <td>
                <img src="img/1.jpg" width="300" height="150">
            </td>
            <td>
                <img src="img/2.jpg" width="300" height="150">
            </td>
        </tr>
        <tr>
            <td>
                <img src="img/3.jpg" width="300" height="150">  
            </td>
            <td>
                <img src="img/4.jpg" width="300" height="150">
            </td>
        </tr>
    </table>
</body>
</html>