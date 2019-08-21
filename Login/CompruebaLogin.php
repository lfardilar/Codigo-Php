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
                header("LOCATION:Usuarios_Registrados1.php");

            }else{
                header("LOCATION:Formulario_Login.php");
            }

        }catch(Exception $e){

            die("Error: " . $e->getMessage());
        }

    ?>
    
</body>
</html>