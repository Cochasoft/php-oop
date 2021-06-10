<?php

include 'conexion.php';

$sql = "select * from producto";
$res = mostrarProducto($sql);
?>
<!--  -->
<html>

<body>
  <form action="funcion.php" method="post" align="left">
    <h2>Compra producto</h2>
    Seleccionar: <select name="producto">
      <option value="0">Productos:</option>
      <?php
      foreach ($res as $val) {
        echo '<option value="' . $val['id_p']. '">' . $val['nombre'] . '</option>';
      }
      ?>
    </select><br></br>
    Cantidad: <input type="text" name="cantidadCompra"><br></br>
    precio compra: <input type="number" name="precioCompra"><br></br>
    fecha registro: <input type="date" name="fecha"><br></br>
    <!-- nota : <input type="text" name="notaCompra"><br></br> -->
    <!-- onclick="alert('se registro correcto!')" -->
    <button  name="enviar" type="submit">Regsitrar Compra</button><br></br>
  </form>

  <table>
    <th>
    </th>
  </table>
  <button ><a href="http://stock.com/index.php?">Nuevo producto </a><br/></button>
  <button><a href="http://stock.com/reporteCompra.php">Reporte de Producto</a></button>
</body>

</html>