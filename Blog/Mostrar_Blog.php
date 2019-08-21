<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    <style>
        div{
            width:400px;
        }
        img{
            width:300px;
        }
    </style>
</head>
<body>
<h1>BLOG</h1>
        <?php
        
            include("Config.php");

            $miconexion = mysqli_connect(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);

            if(!$miconexion){
                echo "La conexion ha fallado: " . mysqli_error();
                exit();
            }
            
            $miconsulta = "SELECT * FROM CONTENIDO ORDER BY Fecha DESC";

            if($resultado = mysqli_query($miconexion, $miconsulta)){
                
                while($registro = mysqli_fetch_assoc($resultado)){

                    echo "<h3>". $registro['Titulo'] . "</h3>";

                    echo "<h4>". $registro['Fecha'] . "</h4>";

                    echo "<div>". $registro['Comentario'] . "</div><br/><br/>";

                    if($registro['Imagen'] != ""){
                        echo "<img src='img/" . $registro['Imagen'] . "'>";
                    }

                    echo "<hr/>";

                }
            }
        ?>
</body>
</html>