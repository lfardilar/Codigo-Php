<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Programacion orientada a objetos</title>
  </head>
  <body>
   <?php

   include("vehiculos.php");

   $mazda=new Coche();
   $for=new Camiones();

   echo "el maszda tiene ".$mazda->get_ruedas()." Ruedas<br>";
   echo "el for tiene ".$for->get_ruedas()." Ruedas<br>";

   echo "el maszda tiene un motor de ".$mazda->get_motor()." CC<br>";
   echo "el for tiene un motor de ".$for->get_motor()." CC<br>";
   ?>
  </body>
</html>
