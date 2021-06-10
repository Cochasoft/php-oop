<?php
include 'conexion.php';
//if(isset($valor)){
//$sql = "SELECT * FROM citys LEFT JOIN comments ON comments.city=citys.city WHERE citys.id=$id";
/* SELECT p.nombre, p.cantidad, i.precio_inicial, cp.cantidadxcompra, cp.cantidadxcompra  
FROM producto as p JOIN compraxproducto as cp ON p.id_p=cp.producto_id_p 
JOIN inventario as i on p.id_p=i.producto_id_p
 */
$reporte="SELECT p.nombre, p.cantidad, i.precio_inicial, cp.cantidadxcompra, cp.precio_compra 
FROM producto as p JOIN compraxproducto as cp ON p.id_p=cp.producto_id_p 
JOIN inventario as i on p.id_p=i.producto_id_p";
 $res=mostrarProducto($reporte);
 //$json_string = json_encode($c);

//var_dump($res);
?>
<html>
<title>Reporte General</title>
<body>
<form action="reporteCompra.php" method="post">
<table border="5">
  <h2>registro de Compra</h2>
 <thead>
  <tr>
   <td>Nombre</td>
   <td>Cantidad inicial</td>
   <td>Precio inicial</td>
   <th>cantidad x compra</td>
   <th>precio x compra</td>
   <th>total stock</td>
  </tr>
 </thead>
  <tbody>
      <?php foreach($res as $a){?>
  <tr>
    <td><?php echo $a['nombre'] ?></td>
    <td><?php echo $a['cantidad']?></td>
    <td><?php echo $a['precio_inicial']?></td>
    <td><?php echo $a['cantidadxcompra'] ?></td>
    <td><?php echo $a['precio_compra'] ?></td>
    <?php }?>
  </tr>
 </tbody>
</table>
</br>
</form>
<!-- 
    <h2>Registro Inventario Inicial</h2>
    nombre: <>
    cantidad: 
    Precio Incial: <input type="text" name="precio"><br>
    Fecha Registro: <input type="text" name="fecha"><br>
    <!-- precio compra: <input type="number" name="precioCompra"><br>
    precio actulizado: <input type="number" name="precioActu"><br>
 -->

<a href="actualizar.php">actualizar</a>
<table>
   <th>
   </th>
</table>
</body>
</html>