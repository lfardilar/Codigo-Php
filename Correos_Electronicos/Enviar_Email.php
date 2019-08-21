<?php

    $texto_mail = $_POST["comentarios"];
    $destinatario = $_POST["email"];
    $asunto = $_POST["asunto"];
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: Prueba Leider < leiderlexco@gmail.com>\r\n";

    $exito = mail($destinatario, $asunto, $texto_mail,$headers);

    if($exito){
        echo "Mensaje Enviado con exito";
    }else{
        echo "Ha hanido un error";
    }

?>