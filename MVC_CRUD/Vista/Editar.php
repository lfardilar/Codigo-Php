<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../Style/hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

<?php

 
if(!isset($_POST["bot_actualizar"])){
    $Id = $_GET['Id'];
    $Nombre = $_GET['Nombre'];
    $Apellido = $_GET['Apellido'];
    $Dirrecion = $_GET['Dirrecion'];
  }else{
    $Id = $_POST["id"];
    $Nombre = $_POST['nom'];
    $Apellido = $_POST['ape'];
    $Dirrecion = $_POST['dir'];
    
    include("../Modelo/Editar.php");
}
?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $Id?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $Nombre?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $Apellido?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $Dirrecion?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>