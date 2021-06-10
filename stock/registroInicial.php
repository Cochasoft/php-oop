<?php
 include 'conexion.php';
 //echo $_POST['id_p'];
 /* echo $p=$_POST['precio'][0];
 echo $f=$_POST['fecha'][0];
 echo $id=$_POST['id'][0];*/
 $f = $_POST['fecha'];
 $p = $_POST['precio'];
 $aux = $_POST['id'];
 $res=sizeof($aux);  
//var_dump($p);
//while($res<=0)
echo 'hola'.$res.'<br>';                     
for ($i=0; $i<$res;$i++){
  echo $p[$i].'<br>';
  echo $f[$i].'<br>';
  echo $aux[$i].'<br>';
   $consulta = "insert into inventario (producto_id_p, precio_inicial, fecha) values ('$aux[$i]', '$p[$i]', '$f[$i]')";
   echo $consulta;
   guardarInventario($consulta); 
}
?>

<html>
<body>
<?php 
/* echo $p=$_POST['precio'][0];
echo $f=$_POST['fecha'][0];
echo $id=$_POST['id'][0];
  */
    /* $res = $_POST['id'];
  foreach ($res as $id){
   echo $id."<br>";}
    */
   //$aux="insert into producto (nombre, cantidad) values ('$nombre','$cantidad')";
  ?>
</body>
</html>