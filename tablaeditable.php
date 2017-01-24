<!DOCTYPE html>
<html>
<head>
	<title>
		Formulario Dinamico
	</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/jquery-3.1.1.min.js"></script>
	</head>
	<body>
	 <?php


$conexion=mysqli_connect("localhost","root","", "inventario") or
die("Problemas con la conexión");
//simple check
$nombre=$_POST['T1'];
$registro = mysqli_query($conexion, "select * from tabla where nombre LIKE '%$nombre%'")
or die("Problemas en el select");


mysqli_close($conexion);
?>
<form action="procesar4.php" method="POST">
	<div class="container">
	<table class="table">
    <thead>

      <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Factura</th>
      </tr>

    </thead>
    <tbody>
    <?php while($rs = mysqli_fetch_array($registro)){
   	 ?>
      <tr>
      <td><?=$rs['id']?></td>
      <td><?=$rs['nombre']?></td>
      <td><?=$rs['apellido']?></td>
			<input type="hidden" name="id[]"  value="<?=$rs['id']?>">
        <td><input type="text" name="factura[]" readonly value="<?=$rs['factura']?>"><button class="mas">+</buttom><button class="menos">-</buttom></td>
      </tr>
            <?php
}

?>
      <tr class="odd">
    </tbody>
 </table>
 </div>
 <input type="submit" name="enviar">
 </form>
	</body>

<script>
$(document).ready(function(){
  $(".mas").click(function(){
  //alert("click")
     $(this).parent().append("<input class='suma' id='sumar' type='text'>")
     $(this).remove()

})

$(".menos").click(function(){

   $(this).parent().append("<input class='resta' id='restar' type='text'>")
    $(this).remove()

})
$("body").on('blur', '.suma',  function() {

  var  total = parseInt($(this).parent().find("input").val())
  var nuevacan = parseInt($(this).val())
  var   sumatotal = total+nuevacan

    $(this).parent().find("input").val(sumatotal)
      $(this).remove()
});
$("body").on('blur', '.resta',  function() {

  var  total = parseInt($(this).parent().find("input").val())
  var nuevacan = parseInt($(this).val())
  var   restatotal = total-nuevacan
    $(this).parent().find("input").val(restatotal)
    $(this).remove()
});

});
</script>
	</html>
