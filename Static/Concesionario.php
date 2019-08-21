<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      include("Statico.php");
      //Compra_Vehiculo::$ayuda = 10000;
      Compra_Vehiculo::Descuento_Gobierno();
      $compra_antonio = new Compra_Vehiculo("Compacto");
      $compra_antonio->Climatizador();
      $compra_antonio->Tapiceria_Cuero("Blanco");
      echo $compra_antonio->Precio_Final();

      echo "<br>";

      $compra_ana = new Compra_Vehiculo("Compacto");
      $compra_ana->Climatizador();
      $compra_ana->Tapiceria_Cuero("Rojo");
      echo  $compra_ana->Precio_Final();
     ?>

  </body>
</html>
