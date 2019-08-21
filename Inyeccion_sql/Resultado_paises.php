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

      $pais = $_GET['Buscar'];
      $conexion = mysqli_connect($db_host,$db_usuario,$db_password);

      if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
      }
      mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de datos ".$db_nombre);
      mysqli_set_charset($conexion,"utf8");

      $sql = "SELECT CODIGOARTICULO, SECCION, PRECIO, PAISORIGEN FROM articulos WHERE PAISORIGEN = ?";

      $Resultado = mysqli_prepare($conexion, $sql);

      $Ok = mysqli_stmt_bind_param($Resultado, "s", $pais);

      $Ok = mysqli_stmt_execute($Resultado);

      if(!$Ok){
          echo "Error al ejecutar la consulta";
      }else{
          $ok = mysqli_stmt_bind_result($Resultado, $codigo, $seccion, $precio, $pais);

          echo "Articulos encontrados: <br>";

          while(mysqli_stmt_fetch($Resultado)){
                echo $codigo . " " . $seccion . " " . $precio . " " . $pais ."<br>";
          }
      }
      mysqli_close($conexion);

     ?>
  </body>
</html>
