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
     $usuario = $_GET["usu"];
     $contra = $_GET["con"];

     require("datosConexion.php");


      $conexion = mysqli_connect($db_host,$db_usuario,$db_password);
      if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
      }
      mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de datos ".$db_nombre);
      mysqli_set_charset($conexion,"utf8");
      $consulta = "Select * from usuarios where USUARIO = '$usuario' AND CONTRA = '$contra'";
      echo "$consulta <br>";
      $resultado = mysqli_query($conexion,$consulta);
      while($fila = mysqli_fetch_array($resultado,MYSQL_ASSOC)){
          
        echo "Bienvenido $usuario <br> Estos son tus datos: <br>";

        echo "<table align='center'>";
        echo "<tr><td>".$fila['USUARIO']."</td>";
          echo "<td>".utf8_decode($fila['CONTRA'])."</td>";
          echo "<td>".utf8_decode($fila['TFNO'])."</td>";
          echo "<td>".utf8_decode($fila['DIRECCION'])."</td></tr>";
        echo "</table>";

      }
      mysqli_close($conexion);

     ?>
  </body>
</html>
