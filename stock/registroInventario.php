<?php
include 'conexion.php';
$aux="SELECT * from producto";
$res = mostrarProducto($aux);

?>
<html>
<body>
<form action="registroInicial.php" method="post">
<table border="5">
  <h2>Registro de Inventario</h2>
 <thead>
  <tr>
   <td>Id</td>
   <td>Nombre</td>
   <td>Cantidad</td>
   <td>Precio Incial</td>
   <td>Fecha Registro</td>
  </tr>
 </thead>
  <tbody>
    <?php foreach($res as $a){?>
  <tr>
    <td><input type="text" name="id[]" value=<?php echo $a['id_p'] ?>></td>
    <td><?php echo $a['nombre'] ?></td>
    <td><?php echo $a['cantidad'] ?></td>
    <td><input type="text" name="precio[]"></td>
    <td><input type="text" name="fecha[]"></td>
    <?php } ?>
  </tr>
 </tbody>

</table>
</br>
   <input type="submit" value="Enviar">
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

<a href="http://stock.com/">Inicio</a>
<table>
   <th>
   </th>
</table>
</body>
</html>
