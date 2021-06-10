<?php

include 'conexion.php';


if(isset($_POST['actualizar'])){
   // echo 'hola';
    $id=$_POST['id'];
    echo $id;
    $nombre=$_POST['nombre'];
    $cantidad=$_POST['cantidad'];
   // $precioCompra=$_GET['precioCompra'];
    $precioActu=$_POST['precioActu'];
   //$query="select * from producto where id_p ='$id'";
   $query="UPDATE producto SET nombre='$nombre', cantidad='$cantidad', precio_venta='$precioActu' WHERE id_p='$id'";
   // $query="select * from producto";
    //$query="insert into cliente(id_cl, nombre_cl, apellido_cl, ci_cl) values ('$id', '$nombre', '$apellido','$ci')";
    actulizarCompra($query);
}

?>

<html>
<body>
<form action="" method="post">
    <h2>Compra producto</h2>
    id <input type="text" name="id"><br>
    Nombre Producto: <input type="text" name="nombre"><br>
    Cantidad: <input type="text" name="cantidad"><br>
    precio compra: <input type="number" name="precioCompra"><br>
    precio actulizado: <input type="number" name="precioActu"><br>

    <input type="submit" name="actualizar" value="actualizar">
</form>

<table>
   <th>
   </th>
</table>
</body>
</html>