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
     $Busqueda = $_POST["Buscar"];
     require("datosConexion.php");

      $conexion = mysqli_connect($db_host,$db_usuario,$db_password);
      if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
      }
      mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de datos ".$db_nombre);
      mysqli_set_charset($conexion,"utf8");
      $consulta = "Select * from Articulos where NOMBREARTICULO like '%".$Busqueda."%' ";
      $resultado = mysqli_query($conexion,$consulta);
      while($fila = mysqli_fetch_array($resultado,MYSQL_ASSOC)){

        echo "<form action='Actualizar_registros.php' method='GET'>";
        echo "<input type='text' name='c_art' value='".$fila['CODIGOARTICULO']."'><br>";
        echo "<input type='text' name='n_art' value='".$fila['NOMBREARTICULO']."'><br>";
        echo "<input type='text' name='seccion' value='".$fila['SECCION']."'><br>";
        echo "<input type='text' name='importado' value='".$fila['IMPORTADO']."'><br>";
        echo "<input type='text' name='precio' value='".$fila['PRECIO']."'><br>";
        echo "<input type='text' name='fecha' value='".$fila['FECHA']."'><br>";
        echo "<input type='text' name='p_origen' value='".$fila['PAISORIGEN']."'><br>";
        echo "<input type='submit' name='enviado' value='Actualizar'>";
        echo "</form>";

      }
      mysqli_close($conexion);

     ?>
  </body>
</html>
