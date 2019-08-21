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
         $db_host="localhost";
         $db_nombre="datosproyecto";
         $db_password="Leider$.2019";
         $db_usuario="root";
         try{

            $bus_CArt = $_POST['C_Art'];
            $bus_Sec = $_POST['Seccion'];
            $bus_NArt = $_POST['N_Art'];
            $bus_Pre = $_POST['Precio'];
            $bus_Fec = $_POST['Fecha'];
            $bus_Imp = $_POST['Imp'];
            $bus_POri = $_POST['P_Ori'];


            $base = new PDO("mysql:host=".$db_host.";dbname=".$db_nombre."", $db_usuario, $db_password);
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $base->exec("SET CHARACTER SET utf8");
            
            $sql = "INSERT INTO articulos (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISORIGEN) VALUES (:C_Art, :SECC , :N_Art, :Precio, :Fecha, :Imp, :PORIG)";
            
            $resultado = $base->prepare($sql);
            
            $resultado->execute(array(":C_Art"=>$bus_CArt, ":SECC"=>$bus_Sec, ":N_Art"=>$bus_NArt, ":Precio"=>$bus_Pre, ":Fecha"=>$bus_Fec, ":Imp"=>$bus_Imp, ":PORIG"=>$bus_POri));
            
            echo "Registro Insertado";
            
            $resultado->closeCursor();

         }catch(Exception $e){
             die("Error: " . $e->GetMessage());
         }
    ?>
</body>
</html>