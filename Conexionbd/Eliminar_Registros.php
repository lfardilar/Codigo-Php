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
       $Sec = $_GET["Seccion"];
       $n_art = $_GET["n_art"];
       $Pre = $_GET["Precio"];
       $Fec = $_GET["Fecha"];
       $Imp = $_GET["Importado"];
       $p_ori = $_GET["p_ori"];

       require("datosConexion.php");
        $conexion = mysqli_connect($db_host,$db_usuario,$db_password);
        if (mysqli_connect_errno()) {
          echo "Fallo al conectar con la BBDD";
          exit();
        }else{
          //echo "Conexion exitosa ";
        }
        mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la base de datos ".$db_nombre);
        mysqli_set_charset($conexion,"utf8");

        $consulta = "DELETE FROM articulos WHERE CODIGOARTICULO = '$Cod'";
        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado == false) {
          echo "Error Eliminado<br>";
        }else{
          if(!mysqli_affected_rows($conexion)){
            echo "No Existe el Registro";
          }else{
            echo "Registros Eliminados ".mysqli_affected_rows($conexion);
          }
        }
        mysqli_close($conexion);

     ?>

  </body>
</html>
