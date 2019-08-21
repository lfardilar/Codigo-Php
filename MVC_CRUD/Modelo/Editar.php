

<?php

  include("Conexion.php");
 
    $base = Conectar::Conexion();   
    $sql = "UPDATE DATOSUSUARIOS SET Nombre=:MiNom, Apellido=:MiApe, Dirrecion=:MiDir WHERE Id=:MiId";

    $resultado = $base->prepare($sql);

    $resultado->execute(array(":MiId"=>$Id ,":MiNom"=>$Nombre , ":MiApe"=>$Apellido , ":MiDir"=>$Dirrecion));

    header("Location:../index.php?Actualiza=true");
  
?>