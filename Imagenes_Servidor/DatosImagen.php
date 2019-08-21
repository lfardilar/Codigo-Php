<?php

    $nombre_imagen = $_FILES['imagen']['name'];

    $tipo_imagen = $_FILES['imagen']['type'];

    $tamano_imagen = $_FILES['imagen']['size'];

    echo $nombre_imagen." ".$tipo_imagen." ".$tamano_imagen;

    $carpeta_destino = $_SERVER['DOCUMENT_ROOT']."/Leider/cursophp/Imagenes_Servidor/";

    if($tamano_imagen <= 1000000){
        if($tipo_imagen == "image/jpeg" or $tipo_imagen == "image/jpg" or $tipo_imagen == "image/png" or $tipo_imagen == "image/gif"){
            move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
          
            require_once("Conexion.php");

            $base = Conectar::Conexion();
            $codart = "AR2";
            $fot = $carpeta_destino.$nombre_imagen;
            $sql = "UPDATE ARTICULOS SET FOTO = :fot WHERE CODIGOARTICULO = :codart";
            $resultado = $base->prepare($sql);
            if(!$resultado->execute(array(":codart"=>$codart,":fot"=>$fot))){
                echo "Error guardando IMG";
            }
        }else{
            echo "Tipo de formato no permitido";
        }
        
    }else{
        echo "El tamaño es demasiado grande";
    }

   

    
   
?>