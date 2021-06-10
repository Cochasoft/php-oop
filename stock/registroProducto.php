<?php

include 'conexion.php';

if(isset($_GET['enviar'])){
  if(!empty($_GET['nombre'])&& !empty($_GET['cantidad'])){
      $nombre=$_GET['nombre'];
      $cantidad=$_GET['cantidad'];
      $aux="insert into producto (nombre, cantidad) values ('$nombre','$cantidad')";
      guardarProducto($aux);
    echo"registrado...";
  }else{
    echo'no llego nada';
  }
}else{
    echo "no da";
  }
?>

<html>
<title>Registro Producto</title>
<body>
<form action="index.php" method="get">
    <h2>Registro Producto</h2>
    Nombre Producto: <input type="text" name="nombre"><br>
    Cantidad: <input type="text" name="cantidad"><br>
    <!-- precio compra: <input type="number" name="precioCompra"><br>
    precio actulizado: <input type="number" name="precioActu"><br>
 -->
    <input name="enviar" type="submit" value="enviar">
</form>
<a href="index.php">pgina principal</a>
<table>
   <th>
   </th>
</table>
</body>
</html>