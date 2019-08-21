<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $alimentos= array("fruta" => array("tropical" => "Kiwi","citrico" => "mandarina","otros" => "manzana"),
                        "leche" => array("animal" => "Vaca","vegetal" => "coco"),
                        "carne" => array("vacuno" => "lomo","cerdo" => "costillas","pollo" => "pechuga"));

                        //echo $alimentos["carne"]["vacuno"];
                        foreach ($alimentos as $clavealim => $alim) {
                          echo "$clavealim:<br>";
                          while (list($clave,$valor)=each($alim)) {
                          echo "$clave = $valor <br>";
                          }
                          echo "<br>";
                        }

                        echo var_dump($alimentos);
     ?>
  </body>
</html>
