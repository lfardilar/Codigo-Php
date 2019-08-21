<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8">
    <title>conexion</title>
    <style>

      h1{
        text-align: center;
        color: #F6F9F7;
        border-bottom: dotted #F6F9F7;
        width: 50%;
        margin: auto;
      }
      table{
        border: 3px solid #045FB4;
        padding: 20px 50px;
        margin-top: 50px;
        color: #F6F9F7;
      }
      body{
        background-color: #01DF74;
      }

.boton {
  color: #000000 !important;
  font-size: 13px;
  font-weight: 500;
  padding: 0.5em 1.2em;
  background: #045FB4;
  border: 2px solid;
  border-color: #318aac;
  transition: all 1s ease;
  position: relative;
}
.boton:hover {
  background: #01A9DB;
  color: #fff !important;
}

    </style>
  </head>
  <body>

    <h1>Eliminacio de Articulos</h1>

    <form name="form1" action="Eliminar_Registros.php" method="GET">
      <table border="0" align="center">
          <tr>
            <td>
              Codigo articulo
            </td>
            <td>
              <label for="c_art1"></label>
              <input type="text" name="c_art" id="c_art">
            </td>
          </tr>
          <tr>
            <td>
              Seccion
            </td>
            <td>
              <label for="Seccion"></label>
              <input type="text" name="Seccion" id="Seccion">
            </td>
          </tr>
          <tr>
            <td>
              Nombre articulo
            </td>
            <td>
              <label for="n_art"></label>
              <input type="text" name="n_art" id="n_art">
            </td>
          </tr>
          <tr>
            <td>
              Precio
            </td>
            <td>
              <label for="Precio"></label>
              <input type="number" name="Precio" id="Precio">
            </td>
          </tr>
          <tr>
            <td>
              Fecha
            </td>
            <td>
              <label for="Fecha"></label>
              <input type="date" name="Fecha" id="Fecha">
            </td>
          </tr>
          <tr>
            <td>
              Importado
            </td>
            <td>
              <label for="Importado"></label>
              <input type="text" name="Importado" id="Importado">
            </td>
          </tr>
          <tr>
            <td>
              Pais de origen
            </td>
            <td>
              <label for="p_ori"></label>
              <input type="text" name="p_ori" id="p_ori">
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center">
              <input type="submit" name="Registrar" id="Registrar" value="Eliminar" class="boton">
            </td>
            <td align="center">
              <input type="reset" name="Borrar" id="Borrar" value="Borrar"  class="boton">
            </td>
          </tr>
      </table>
    </form>




  </body>
</html>
