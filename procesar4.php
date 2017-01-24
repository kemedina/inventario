<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manuales</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style type="text/css">
  body{background-image: url(img/fondo1.png);}

  .navbar  { background: rgba(169,3,41,1);}

  </style>
</head>
<body>
<br>
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color: white;">Sistema de Almcacen</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="inventario.php" style="color: white;font-size: 18px;">Nuevo ingres al almacen</a></li>
      <li><a href="departamentos.php" style="color: white;font-size: 18px;">Ingreso a Departamentos</a></li>
      <li><a href="buscar.php" style="color: white;font-size: 18px;">Consulta de Almacen</a></li>
      <li><a href="consuldepart.php" style="color: white;font-size: 18px;">Consulta de Distribucion</a></li>
      <li><a href="#" style="color: white;font-size: 18px;">Exportar inventario </a></li>
    </ul>
  </div>
</nav>
</div>

<?php
$registro = $_POST['id'];
$conexion=mysqli_connect("localhost","root","","inventario") or
 die("Problemas con la conexión");

 while($rs = mysqli_fetch_array($registro)){
mysqli_query($conexion, "update tabla
                          set factura='$_REQUEST[factura]'
                        where id='$_REQUEST[id]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "El mail fue modificado con exito";

}

?>

</body>
</html>
