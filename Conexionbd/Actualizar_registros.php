<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

      h1{
        text-align: center;
        color: #F6F9F7;
        border-bottom: dotted #F6F9F7;
        width: 50%;
        margin: auto;
      }
      table{
        border: 3px solid #045FB4;
        padding: 20px 50px;
        margin-top: 50px;
        color: #F6F9F7;
      }
      body{
        background-color: #01DF74;
      }

.boton {
  color: #000000 !important;
  font-size: 13px;
  font-weight: 500;
  padding: 0.5em 1.2em;
  background: #045FB4;
  border: 2px solid;
  border-color: #318aac;
  transition: all 1s ease;
  position: relative;
}
.boton:hover {
  background: #01A9DB;
  color: #fff !important;
}

    </style>
  </head>
  <body>
    <?php

       $Cod = $_GET["c_art"];
       $Sec = $_GET["seccion"];
       $n_art = $_GET["n_art"];
       $Pre = $_GET["precio"];
       $Fec = $_GET["fecha"];
       $Imp = $_GET["importado"];
       $p_ori = $_GET["p_origen"];

       require("datosConexion.php");
        $conexion = mysqli_connect($db_host,$db_usuario,$db_password);
        if (mysqli_connect_errno()) {
          echo "Fallo al conectar con la BBDD";
          exit();
        }else{
          echo "Conexion exitosa ";
        }
        mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de datos ".$db_nombre);
        mysqli_set_charset($conexion,"utf8");

        $consulta = "UPDATE articulos SET CODIGOARTICULO = '$Cod', SECCION = '$Sec', NOMBREARTICULO = '$n_art', PRECIO = '$Pre', FECHA = '$Fec', IMPORTADO = '$Imp', PAISORIGEN = '$p_ori' WHERE CODIGOARTICULO = '$Cod'";
        
        if (!$resultado = mysqli_query($conexion,$consulta)) {
          echo "Error Insertando $consulta";
        }else{
          echo "Registro guardado<br>";
          echo "<table align='center'>";
          echo "<tr><td>".$Cod."</td>";
            echo "<td>".$Sec."</td>";
            echo "<td>".$n_art."</td>";
            echo "<td>".$Pre."</td>";
            echo "<td>".$Fec."</td>";
            echo "<td>".$Imp."</td></tr>";
          echo "</table>";
        }
        mysqli_close($conexion);

     ?>

  </body>
</html>
