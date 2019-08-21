<?php

require_once("Conexion.php");

$base = Conectar::Conexion();
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
$sql_total = "Select * from DATOSUSUARIOS";

$resultado = $base->prepare($sql_total);
$resultado->execute(array());
$num_filas = $resultado->rowCount();
$total_pag = ceil($num_filas/$TamPag);

?>