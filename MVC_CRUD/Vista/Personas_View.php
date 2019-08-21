<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personas</title>

</head>
<body>
<?php
    include("Modelo/Paginacion.php");
    
//--------------------------//
  $Actualiza = isset($_GET['Actualiza']) ? $_GET['Actualiza'] : "false";
  $borrado = isset($_GET['borrado']) ? $_GET['borrado'] : "false";
  $Registro = isset($_GET['Registro']) ? $_GET['Registro'] : "false";
  if($borrado == 'true'){
    echo "<script>Exitoso('Borrado exitoso');</script>";
    $borrado = "false";
  }
  if($Actualiza == 'true'){
    echo "<script>Exitoso('Actualizacion exitosa');</script>";
    $Actualiza = "false";
  }
  if($Registro == 'true'){
    echo "<script>Exitoso('Registro exitoso');</script>";
    $Registro = "false";
  }
?>
?>
<form action="Modelo/Insertar.php" method="post">
    <table width="50%" border="0" align="center">
      <tr >
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Direccion</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr> 
    
      <?php
      foreach ($matrizPersona as $personas):
      ?>
          <tr>
            <td><?php echo $personas["Id"];?></td>
            <td><?php echo $personas["Nombre"];?></td>
            <td><?php echo $personas["Apellido"];?></td>
            <td><?php echo $personas["Dirrecion"];?></td>
        
            <td class="bot">
              <a href="Modelo/Borrar.php?Id=<?php echo $personas["Id"]?>"><input type='button' name='del' id='del' value='Borrar'></a>
            </td>
            <td class='bot'>
            <a href="Vista/Editar.php?Id=<?php echo $personas["Id"]?> & Nombre=<?php echo $personas["Nombre"]?> & Apellido=<?php echo $personas["Apellido"]?> & Dirrecion=<?php echo $personas["Dirrecion"]?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
          </tr>      
      <?php
      endforeach;
      ?>
      
    <tr>
    <td></td>
        <td><input type='text' name='Nom' size='10' class='centrado'></td>
        <td><input type='text' name='Ape' size='10' class='centrado'></td>
        <td><input type='text' name=' Dir' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
        <tr>
            <td colspan="4">
            <?php
                $regal = $TamPag*$Pagina;
                $regdes = $Emp_Des == 0 ? 1 : $Emp_Des;
                echo "<label>Registros $regdes al $regal de $num_filas Pag </label>";
                    for ($i=1; $i <= $total_pag; $i++) { 
                        echo " <a href='?pagina=".$i."'><Strong>". $i . "</Strong></a>  ";
                    }
            ?>
            </td>
        </tr>
    </table>
  </form>
</body>
</html>