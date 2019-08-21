<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>CRUD</title>
<script src="js/package/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="js/package/dist/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="Style/hoja.css">
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

<h1>MODELO VISTA CONTROLADOR</h1>
<br>

<?php

        require_once("Controlador/Personas_Controlador.php");
?>
    
</body>
</html>