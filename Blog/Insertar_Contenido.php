<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar contenido</title>
</head>
<body>

    <?php
        include("Config.php");

        $miconexion = mysqli_connect(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);

        if(!$miconexion){
            echo "La conexion ha fallado: " . mysqli_error();
            exit();
        }

        if($_FILES["imagen"]['error']){
            switch ($_FILES["imagen"]['error']) {
                case '1':
                    echo "El tamaño del archivo excede lo permitido por el servidor";
                break;
                case '2':
                    echo "El tamaño del archivo excede 2MB";
                break;
                case '3':
                    echo "El envio de archivo se interrumpio";
                break;
                case '4':
                    echo "No se ha enviado ningun archivo";
                break;

                default:
                    echo "error archivo";
                break;
            }
        }else{
            
            echo "Entrada subida correctamente <br/>";

            if((isset($_FILES['imagen']['name'])) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK)){
                
                $destino_ruta = "img/".$_FILES['imagen']['name'];

                move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_ruta);

                echo "El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imagenes";
            
            }else{
                echo "El archivo no Se ha copiado en el directorio de imagenes";
            }
        }

        $Titulo = $_POST["campo_titulo"];   
        $Fecha = date("Y-m-d H:i:s");
        $Comentario = $_POST["area_comentarios"];
        $Imagen = $_FILES['imagen']['name'];
        $miconsulta = "INSERT INTO CONTENIDO (Titulo, Fecha, Comentario, Imagen) VALUES ('".$Titulo."', '".$Fecha."', '".$Comentario."', '".$Imagen."')";

        $resultado = mysqli_query($miconexion, $miconsulta);

        mysqli_close($miconexion);

        echo "<br> Se ha agregado el comentario con exito <br>";
    ?>
        <a href="Formulario.php">A�adir nueva entrada</a>
        <a href="Mostrar_Blog.php">Mostrar_Blog</a>
</body>
</html>