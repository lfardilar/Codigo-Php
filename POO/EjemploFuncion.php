<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones</title>
  </head>
  <body>
    <?php
//funcion parametros por referencia
    function incrementar(&$valor){
      $valor++;
      return $valor;
    }
//caraxteres
function filtrarcaracteres($valor)
{
	$filrado = html_entity_decode(preg_replace("/\t/", "", preg_replace("/((&|&amp;|#|&AMP;)[0-9a-z]*;)/", "-", html_entity_decode(strtolower(trim($valor))))));
	return $filrado;	
}



echo "<br> $tamañocadena"
      ?>
  </body>
</html>
