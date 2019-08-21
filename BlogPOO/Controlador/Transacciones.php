<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaciones</title>
</head>
<body>

<?php
        include_once("../Modelo/Objeto_Blog.php");
        include_once("../Modelo/Manejo_Objetos.php");
        include_once("../Modelo/Conexion.php");
        
        $miconexion = Conectar::Conexion();

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
                
                $destino_ruta = "../img/".$_FILES['imagen']['name'];

                move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_ruta);

                echo "El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imagenes";
            
            }else{
                echo "El archivo no Se ha copiado en el directorio de imagenes";
            }
        }

        $Manejo_Objetos = new Manejo_Objetos($miconexion);
        $Blog = new Objeto_Blog();

        $Blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
        $Blog->setFecha(Date("Y-m-d H:i:s"));
        $Blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
        $Blog->setImagen($_FILES["imagen"]["name"]);

        $Manejo_Objetos->InsertaContenido($Blog);

        echo "<br/> Entrada de Blog agregada con exito <br/>";

    ?>
    
</body>
</html>