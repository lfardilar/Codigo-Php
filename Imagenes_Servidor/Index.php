<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imagen</title>
    <style>
        table{
            margin:auto;
            width:450px;
            border: 2px dotted #FF0000;
        }
        .center{
            text-align:center;
        }
    </style>
</head>
<body>
        <form action="DatosImagen.php" method="POST" enctype="multipart/form-data">
        
            <table>
                <tr>
                    <td>
                        <label for="imagen">Imagen:</label>
                    </td>
                    <td>
                        <input type="file" name="imagen" id="imagen" size="20">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="center">
                        <input type="submit" value="Enviar Imagen">
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>