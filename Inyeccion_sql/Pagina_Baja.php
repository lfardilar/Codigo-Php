<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf8">
    <title>conexion</title>
    <style>
      table{
        width: 50%;
        border: 1px dotted #FF0000;
        text-align: left;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <?php
     
     require("datosConexion.php");


      $conexion = mysqli_connect($db_host,$db_usuario,$db_password);
      $usuario = mysqli_real_escape_string($conexion,$_GET["usu"]);
       $contra = mysqli_real_escape_string($conexion,$_GET["con"]);

      if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
      }
      mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de datos ".$db_nombre);
      mysqli_set_charset($conexion,"utf8");
      $consulta = "DELETE from usuarios where USUARIO = '$usuario' AND CONTRA = '$contra'";
     
      echo "$consulta <br>";
      mysqli_query($conexion,$consulta);
      
      if(mysqli_affected_rows($conexion) > 0){
        echo "Baja procesada";
      }else{
        echo "No se encontrado usuarios";
      }
     
      mysqli_close($conexion);

     ?>
  </body>
</html>
