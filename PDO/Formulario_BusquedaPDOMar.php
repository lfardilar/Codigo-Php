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
    <form class="" action="Pagina_BusquedaPDOMar.php" method="POST">
     <table>
     <tr>
        <td>
            <label>Seccion</label>
             <input type="text" name="Seccion">
        </td>
     </tr>
     <tr>
        <td>
            <label>P.Origen</label>
            <input type="text" name="P_Ori">
        </td>
     </tr>
     <tr>
        <td colspan="2">
            <input type="submit" name="enviado" value="Dale">
        </td>
     </tr>
    
      
      
     
     </table>
      
    </form>
  </body>
</html>
