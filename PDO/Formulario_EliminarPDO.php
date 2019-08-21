<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>

        table{
            width:300px;
            margin:auto;
            background-color:#FFC;
            border:2px solid #F00;
            padding:5px;
        }
        td{
            text-align:center;
        }
    </style>
  </head>
  <body>
    <form class="" action="Pagina_EliminarPDO.php" method="POST">
     <table>
     <tr>
        <td>
            <label>C.Articulo</label>
            <input type="text" name="C_Art">
        </td>
     </tr>
     
     <tr>
        <td colspan="2">
            <input type="submit" name="enviado" value="Eliminar">
        </td>
     </tr>
    
      
      
     
     </table>
      
    </form>
  </body>
</html>
