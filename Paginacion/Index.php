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
        
        include("Conexion.php");
        $TamPag = 3;
        $Pagina = 1;
            if(isset($_GET["pagina"])){
                if($_GET["pagina"] ==1){
                    header("Location:index.php");
                }else{
                    $Pagina = $_GET["pagina"];
                }
            }
        
        $Emp_Des = ($Pagina-1)*$TamPag;
        $sql_total = "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISORIGEN FROM articulos ";

        $resultado = $base->prepare($sql_total);
        $resultado->execute(array());
        $num_filas = $resultado->rowCount();
        $total_pag = ceil($num_filas/$TamPag);

        echo "Numero de registros de la consulta: " .$num_filas ."<br>";
        echo "Mostramos " . $TamPag . " Registros por pagina <br>";
        echo "Mostramos la pagina " . $Pagina . " de " . $total_pag . "<br><br>";

        $sql_Limit = "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISORIGEN FROM articulos LIMIT $Emp_Des ,$TamPag";
        $resultado = $base->prepare($sql_Limit);
        $resultado->execute(array());

        while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
            echo "<strong>Nombre Articulo:</strong> " . $registro['NOMBREARTICULO'] . " <strong>SECCION:</strong> " . $registro['SECCION'] . " <strong>PRECIO:</strong> " . $registro['PRECIO'] . " <strong>PAISORIGEN:</strong> " . $registro['PAISORIGEN'] . " <br>" ;
        }
        
        $resultado->closeCursor();

        for ($i=1; $i <= $total_pag; $i++) { 
            echo " <a href='?pagina=".$i."'>". $i . "</a>  ";
        }
    ?>
   
</body>
</html>