<?php
include 'conexion.php';


 
//$sql = "SELECT * FROM citys LEFT JOIN comments ON comments.city=citys.city WHERE citys.id=$id";
$reporte="SELECT p.nombre, cp.precio_compra, cp.cantidadxcompra, cp.fecha, cp.nota
  from producto as p join compraxproducto as cp ON p.id_p=cp.producto_id_p";
 $res = mostrarProducto($reporte);

?>
<html>
<title>Reporte Compra</title>
<body>
<form action="reporteCompra.php" method="post">
<table border="5">
  <h2>registro de Compra</h2>
 <thead>
  <tr>
   <td>Nombre</td>
   <td>Cantidad</td>
   <td>Precio Compra</td>
   <td>Fecha Registro</td>
   <td>nota</td>
  </tr>
 </thead>
  <tbody>
      <?php 
      //var_dump($res);
      $res = $res->fetchAll();
     // var_dump($res);
      foreach($res as $a ){
        $aux=json_decode($a['nota']);
        
        //var_dump($a);
       ?> 
  <tr>
    <td><?php echo $a['nombre'] ?></td>
    <td><?php echo $a['cantidadxcompra']?></td>
    <td><?php echo $a['precio_compra']  ?></td>
    <td><?php echo $a['fecha'] ?></td>
    <td>se realizola compra de <?php 
      echo $a['nota']/* $a['nota'] */ 
          
    ?></td>
    <?php }?>
  </tr>
 </tbody>
</table>
</br>
</form>
<button><a href="http://stock.com/compraProducto.php">Registro Compra</a></button></br>
<button><a href="http://stock.com/reporteGeneral.php">Reporte General</a></button>
<table>
   <th>
   </th>
</table>
</body>
</html>
<?php var_dump($res->fetchAll()); ?>