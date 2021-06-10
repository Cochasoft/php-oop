<?php

include 'conexion.php';

/* 
if(isset($_GET['nombre'])&&isset($_GET['apellido'])){
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $aux="insert into cliente (id_cl, nombre_cl, apellido_cl, ci_cl) values (8,'$nombre','$apellido',12345)";
    //$query="insert into cliente(id_cl, nombre_cl, apellido_cl, ci_cl) values ('$id', '$nombre', '$apellido','$ci')";
    guardarCleinte($aux);

}
 */
$res="SELECT * from producto";
$aux = mostrarProducto($res);
?>


<html>
<body>
<!-- <form action="index.php" method="get">
    <h2>Compra</h2>
    Nombre Producto: <input type="text" name="nombre"><br>
    Cantidad: <input type="text" name="cantidad"><br>
    precio compra: <input type="number" name="precioCompra"><br>
    precio actulizado: <input type="number" name="precioActu"><br>

    <input type="submit" value="Enviar">
    
</form> -->
<a href="actualizar.php">actualizar</a>
<table border="5">
<h2>Lsita de Producto</h2>
 <thead>
 <tr>
   <td>Id</td>
   <td>Nombre</td>
   <td>Cantidad</td>
 </tr>
 </thead>
 <tbody>
 <?php foreach($aux as $a){?>
<tr>
    <td><?php echo $a['id_p'] ?></td>
    <td><?php echo $a['nombre'] ?></td>
    <td><?php echo $a['cantidad'] ?></td>
    <?php } ?>
 </tr>
 </tbody>
</table>
</body>
</html>