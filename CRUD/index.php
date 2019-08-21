<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">

<script src="js/package/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="js/package/dist/sweetalert2.min.css">
</head>

<body>
<script>
function Exitoso(Texto){
    Swal.fire({
  position: 'center',
  type: 'success',
  title: Texto,
  showConfirmButton: false,
  timer: 1500
})
}

</script>
<?php

  include("Conexion.php");
        //Paginador
        $TamPag = 3;
        $Pagina = 1;
            if(isset($_GET["pagina"])){
                if($_GET["pagina"] ==1){
                    header("Location:index.php");
                }else{
                    $Pagina = $_GET["pagina"];
                }
            }
        
        $Emp_Des = ($Pagina-1)*$TamPag;
        $sql_total = "Select * from DATOSUSUARIOS";

        $resultado = $base->prepare($sql_total);
        $resultado->execute(array());
        $num_filas = $resultado->rowCount();
        $total_pag = ceil($num_filas/$TamPag);

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
  $registros = $base->query("Select * from DATOSUSUARIOS Limit $Emp_Des ,$TamPag")->fetchAll(PDO::FETCH_OBJ);

  if(isset($_POST["cr"])){
    $nombre = $_POST["Nom"];
    $apellido = $_POST["Ape"];
    $dirrecion = $_POST["Dir"];

    $sql = "INSERT INTO DATOSUSUARIOS (Nombre, Apellido, Dirrecion) VALUES (:nom, :ape, :dir)";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$dirrecion));
    header("Location:index.php?Registro=true");
  }
?>

  <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
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
      foreach ($registros as $personas):
      ?>
          <tr>
            <td><?php echo $personas->Id;?></td>
            <td><?php echo $personas->Nombre;?></td>
            <td><?php echo $personas->Apellido;?></td>
            <td><?php echo $personas->Dirrecion;?></td>
        
            <td class="bot">
              <a href="Borrar.php?Id=<?php echo $personas->Id?>"><input type='button' name='del' id='del' value='Borrar'></a>
            </td>
            <td class='bot'>
            <a href="Editar.php?Id=<?php echo $personas->Id?> & Nombre=<?php echo $personas->Nombre?> & Apellido=<?php echo $personas->Apellido?> & Dirrecion=<?php echo $personas->Dirrecion?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
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
?></td>
        </tr>
    </table>
  </form>
  
<p>&nbsp;</p>
</body>
</html>