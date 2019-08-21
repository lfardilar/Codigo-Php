<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css" MEDIA=screen>
    <title>Document</title>
</head>
<body>

    <?php
        if(isset($_COOKIE["idioma_seleccionado"])){
            if($_COOKIE["idioma_seleccionado"] == "es"){
                header("Location:Spanish.php");
            }else if($_COOKIE["idioma_seleccionado"] == "in"){
                header("Location:English.php");
            }
        }
    
    ?>
    <table width="25%" border="0" aling="center">
        <tr>
            <td colspan="2" aling="center"><h1>Elige Idioma</h1>

            </td>
        </tr>
        <tr>
            <td aling="center"><a href="CrearCookie.php?idioma=es"><img src="img/Esp.gif" width="90" height="60"></a></td>
            <td aling="center"><a href="CrearCookie.php?idioma=in"><img src="img/Ing.gif" width="90" height="60"></a></td>
        </tr> 
    </table>
</body>
</html>