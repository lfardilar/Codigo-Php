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
    <form class="" action="Pagina_InsertarPDO.php" method="POST">
     <table>
     <tr>
        <td>
            <label>C.Articulo</label>
            <input type="text" name="C_Art">
        </td>
     </tr>
     <tr>
        <td>
            <label>Seccion</label>
             <input type="text" name="Seccion">
        </td>
     </tr>
     <tr>
        <td>
            <label>Nombre Art</label>
            <input type="text" name="N_Art">
        </td>
     </tr>
     <tr>
        <td>
            <label>Precio</label>
            <input type="text" name="Precio">
        </td>
     </tr>
     <tr>
        <td>
            <label>Fecha</label>
            <input type="date" name="Fecha">
        </td>
     </tr>
     <tr>
        <td>
            <label>Importado</label>
            <input type="text" name="Imp">
        </td>
     </tr>
     <tr>
        <td>
            <label>Pais Origen</label>
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
