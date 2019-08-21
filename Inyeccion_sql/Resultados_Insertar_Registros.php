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

      $c_art = $_GET["c_art"];
      $Sec = $_GET["Seccion"];
      $n_art = $_GET["n_art"];
      $Pre = $_GET["Precio"];
      $Fec = $_GET["Fecha"];
      $Imp = $_GET["Importado"];
      $p_ori = $_GET["p_ori"];
     

      $conexion = mysqli_connect($db_host,$db_usuario,$db_password);

      if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
      }
      mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de datos ".$db_nombre);
      mysqli_set_charset($conexion,"utf8");

      $sql = "INSERT INTO articulos (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, PAISORIGEN, FECHA, IMPORTADO) VALUES (?,?,?,?,?,?,?)";

      $Resultado = mysqli_prepare($conexion, $sql);

      $Ok = mysqli_stmt_bind_param($Resultado, "sssisis", $c_art, $Sec, $n_art, $Pre, $Fec, $Imp, $p_ori);

      $Ok = mysqli_stmt_execute($Resultado);

      if(!$Ok){
          echo "Error al ejecutar la consulta";
      }else{
         // $ok = mysqli_stmt_bind_result($Resultado, $codigo, $seccion, $precio, $pais);

          echo "Agregado nuevo registro: <br>";

         // while(mysqli_stmt_fetch($Resultado)){
           //     echo $codigo . " " . $seccion . " " . $precio . " " . $pais ."<br>";
          //}
      }
      mysqli_close($conexion);

     ?>
  </body>
</html>
