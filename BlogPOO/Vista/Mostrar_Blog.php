<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Style/Estilos.css">
    <title>Mostrar_blog</title>
</head>
<body>
    <?php

        include_once("../Modelo/Manejo_Objetos.php");
        include_once("../Modelo/Conexion.php");
        
        $miconexion = Conectar::Conexion();

        $Manejo_Objetos = new Manejo_Objetos($miconexion);

        $Tabla_Blog = $Manejo_Objetos->getContenidoPorFecha();

        if(empty($Tabla_Blog)){
            echo "NO hay entradas de blog aun.";
        }else{
            foreach($Tabla_Blog as $valor){
                echo "<h3>" . $valor->getTitulo() . "</h3>";
                echo "<h4>" . $valor->getFecha() . "</h4>";
                echo "<div>" . $valor->getComentario() . "</div>";
                if($valor->getImagen() != ""){
                    echo "<img src='../img/". $valor->getImagen() . "'/>";
                }
                echo "<br/><hr/>";
            }
        }
        
    ?>
    <a href="Formulario.php">Volver a la pagina de inserción</a>
</body>
</html>