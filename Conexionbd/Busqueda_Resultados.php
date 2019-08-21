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

    <?php
    function Ejecuta_Consulta($labusqueda){
       //$Busqueda = $_POST["Buscar"];
       require("datosConexion.php");
        $conexion = mysqli_connect($db_host,$db_usuario,$db_password);
        if (mysqli_connect_errno()) {
          echo "Fallo al conectar con la BBDD";
          exit();
        }
        mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de datos ".$db_nombre);
        mysqli_set_charset($conexion,"utf8");
        $consulta = "Select * from Articulos where NOMBREARTICULO like '%".$labusqueda."%' ";
        $resultado = mysqli_query($conexion,$consulta);
        while($fila = mysqli_fetch_array($resultado,MYSQL_ASSOC)){
          echo "<table align='center'>";
          echo "<tr><td>".$fila['CODIGOARTICULO']."</td>";
            echo "<td>".utf8_decode($fila['NOMBREARTICULO'])."</td>";
            echo "<td>".utf8_decode($fila['SECCION'])."</td>";
            echo "<td>".utf8_decode($fila['IMPORTADO'])."</td>";
            echo "<td>".utf8_decode($fila['PRECIO'])."</td>";
            echo "<td>".utf8_decode($fila['PAISORIGEN'])."</td></tr>";
          echo "</table>";

        }
        mysqli_close($conexion);
 }
     ?>

  </head>
  <body>
    <?php
    $miBusqueda = $_GET["Buscar"];
    $mipag = $_SERVER["PHP_SELF"];
    if ($miBusqueda != NULL) {
      Ejecuta_Consulta($miBusqueda);
    }else{
    ?>
    <form class="" action="<?php echo $mipag?>" method="GET">
      <label>Buscar: <input type="text" name="Buscar"></label>
      <input type="submit" name="enviado" value="Dale">
    </form>
    <?php
  }
  ?>
  </body>
</html>
