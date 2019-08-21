<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>INTRODUCE TUS DATOS</h1>

    <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="POST">

        <table>
            <tr>
                <td class="izq">
                    Login
                </td>
                <td class="der">
                    <input type="text" name="Login">
                </td>
            </tr>
            <tr>
                <td class="izq">
                    Password
                </td>
                <td class="der">
                    <input type="password" name="Password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="Enviar" value="LOGIN">
                </td>
            </tr>

        </table>
    </form>
</body>
</html>