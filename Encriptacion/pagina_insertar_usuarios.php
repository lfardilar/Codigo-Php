<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	
<?php

require_once("Config.php");
$usuario= $_POST["usu"];
$contrasenia= $_POST["contra"];

$pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT, array("cost"=>12));

			
try{
	
	$base = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NOMBRE."", DB_USUARIO, DB_CONTRA);
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$base->exec("SET CHARACTER SET utf8");		
	
	
	$sql="INSERT INTO USUARIOS_PASS (USUARIOS, PASSWORD) VALUES (:usu, :contra)";
	
	$resultado=$base->prepare($sql);		
	
	
	$resultado->execute(array(":usu"=>$usuario, ":contra"=>$pass_cifrado));		
	
	
	echo "Registro insertado";
	
	$resultado->closeCursor();

}catch(Exception $e){			
	
	
	echo "Línea del error: " . $e->getLine();
	
}

?>
</body>
</html>