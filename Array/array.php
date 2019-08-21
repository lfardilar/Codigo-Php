<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php
     //Array indesado
     echo "<h1>array indesado</h1>";
      $semana[]="Lunes";
      $semana[]="Martes";
      $semana[]="Miercoles";
      echo $semana[2]."<br>";

      $Entresemana = array("Lunes","Martes","Miercoles","Jueves");
      echo $Entresemana[4]."<br>";
          sort($Entresemana);
            for ($i=0; $i<count($Entresemana) ; $i++) {
            echo  $Entresemana[$i]."<br>";
            }
            $Entresemana[]="Viernes";
            for ($i=0; $i<count($Entresemana) ; $i++) {
            echo  $Entresemana[$i]."<br>";
            }

      //array Nombrados
      echo "<h1>array Nombrados</h1>";
      $persona=array("Nombre"=>"Leider","Apelido"=>"Ardila","Edad"=>"18");
      echo $persona['Apelido']."<br>";
      $persona["Pais"] ="Colombia" ;

      if(is_array($persona)){
        echo "Si es un array <br>";
      }else{
        echo "No es un array <br>";
      }

      foreach ($persona as $clave => $valor) {
        // code...
        echo "A $clave le corresponde $valor <br>";
      }

      ?>
  </body>
</html>
