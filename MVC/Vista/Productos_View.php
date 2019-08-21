<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <style>
        td{
            border:1px dotted #FF0000;
        }
    </style>
</head>
<body>
    
    <table>
        <tr>
            <td>
                NOMBRE DEL ARTICULO
            </td>
        </tr>
        <?php
        foreach($matrizProducto as $registro){
 
                   echo "<tr><td>".$registro["NOMBREARTICULO"]."</td></tr>";
        }        
        ?>
            
    </table>
   
</body>
</html>