<?php

    include("conexion.php");
    $base = Conectar::Conexion();
  if(isset($_POST["cr"])){
    $nombre = $_POST["Nom"];
    $apellido = $_POST["Ape"];
    $dirrecion = $_POST["Dir"];

    $sql = "INSERT INTO DATOSUSUARIOS (Nombre, Apellido, Dirrecion) VALUES (:nom, :ape, :dir)";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$dirrecion));
    header("Location:../index.php?Registro=true");
  }
?>