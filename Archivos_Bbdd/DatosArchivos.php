<?php

    $nombre_Archivo = $_FILES['archivo']['name'];

    $tipo_Archivo = $_FILES['archivo']['type'];

    $tamano_Archivo = $_FILES['archivo']['size'];

    echo $nombre_Archivo." ".$tipo_Archivo." ".$tamano_Archivo;

    $carpeta_destino = $_SERVER['DOCUMENT_ROOT']."/Leider/cursophp/Archivos_Bbdd/";

    if($tamano_Archivo <= 100000000){
        
            move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_Archivo);

            $file = $carpeta_destino.$nombre_Archivo;
            require_once("Conexion.php");

            $base = Conectar::Conexion();

            $archivo_objetivo = fopen($file, "r");

            $contenido = fread($archivo_objetivo, $tamano_Archivo);

            fclose($archivo_objetivo);
            try{
                $sql = "INSERT INTO ARCHIVOS (Id, Nombre, Tipo, Contenido) VALUES (:Id, :Nombre, :Tipo, :Contenido)";
                
                $resultado = $base->prepare($sql);
                $Id = 0;
                $resultado->execute(array(":Id"=>$Id, ":Nombre"=>$nombre_Archivo, ":Tipo"=>$tipo_Archivo, ":Contenido"=>$contenido));

                $resultado = $base->prepare($sql);
            
                 echo "Archivo Insertado con exito";

            }catch(Exception $e){
                die("Error: No se a Insertado Archivo " . $e->GetMessage());
            }
        
    }else{
        echo "El tamaño es demasiado grande";
    }

   

    
   
?>