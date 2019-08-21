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
        if(!$_COOKIE["idioma_seleccionado"]){
            header("Location:Pag1.php");
        }else if($_COOKIE["idioma_seleccionado"] == "es"){
            header("Location:Spanish.php");
        }else if($_COOKIE["idioma_seleccionado"] == "in"){
            header("Location:English.php");
        }
    ?>
</body>
</html>