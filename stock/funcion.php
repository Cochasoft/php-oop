<?php

include 'conexion.php';

if(isset($_POST['enviar'])){
    if(empty($_POST['producto'])){
      $valor =$_POST['producto'];
      $valor1 =$_POST['cantidadCompra'];
      $valor2 =$_POST['precioCompra'];
      $valor3 =$_POST['fecha'];
  //echo $valor;
      $json = array('id'=>$valor, 'cantidadxcompra'=>$valor1, 'precioxcompra'=>$valor2, 'fecha'=>$valor3);
  //var_dump(json_encode($json));	
      $jsonCompra = json_encode($json);
      $consulta = "insert into compraxproducto (producto_id_p, precio_compra, fecha, cantidadxcompra, nota) values ('$valor', '$valor2 ', '$valor3', '$valor1', '$jsonCompra')";
      metodoPut($consulta);
    }else{
      echo "esta vacio el formulario";
    }
  }


?>