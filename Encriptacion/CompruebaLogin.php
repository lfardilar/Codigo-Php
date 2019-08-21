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

try{
	
	$login=htmlentities(addslashes($_POST["Login"]));
	
	$password=htmlentities(addslashes($_POST["Password"]));
    
    $contador = 0;

	
	$base = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NOMBRE."", DB_USUARIO, DB_CONTRA);
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	$sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login";
	
	$resultado=$base->prepare($sql);	
		
	$resultado->execute(array(":login"=>$login));
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){			
			
			//echo "Usuario: " . $registro['USUARIOS'] . " Contraseña: " . $registro['PASSWORD'] . "<br>";			
			if(password_verify($password, $registro['PASSWORD'])){
                $contador++;
            }		
			
        }
        if($contador > 0){
            echo "usuario Registrado";
        }else{
            echo "Usuario no Registrado";
        }
		
							
		
		
		$resultado->closeCursor();

	
	
}catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
	
}

    ?>
    
</body>
</html>