<?php

include 'conexion.php';

header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['id_cl'])){
        $query="select * from cliente where id_cl=".$_GET['id_cl'];
        $resultado=metodoGet($query);
        echo json_encode($resultado->fetch(PDO::FETCH_ASSOC));
    }else{
        $query="select * from cliente";
        $resultado=metodoGet($query);
        echo json_encode($resultado->fetchAll()); 
    }
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='POST'){
    
    unset($_POST['METHOD']);
    $id=$_POST['id_cl'];
    $nombre=$_POST['nombre_cl'];
    $apellido=$_POST['apellido_cl'];
    $ci=$_POST['ci_cl'];
    $query="insert into cliente(id_cl, nombre_cl, apellido_cl, ci_cl) values ('$id', '$nombre', '$apellido','$ci')";
    $queryAutoIncrement="select MAX(id_cl) as id_cl from cliente";
    $resultado=metodoPost($query, $queryAutoIncrement);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='PUT'){
    unset($_POST['METHOD']);
    $id=$_POST['id_cl'];
    $nombre=$_POST['nombre_cl'];
    $apellido=$_POST['apellido_cl'];
    $ci=$_POST['ci_cl'];
    $query="UPDATE cliente SET nombre_cl='$nombre', apellido_cl='$apellido', ci_cl='$ci' WHERE id_cl='$id'";
    $resultado=metodoPut($query);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='DELETE'){
    unset($_POST['METHOD']);
    $id=$_GET['id_cl'];
    $query="DELETE FROM cliente WHERE id_cl='$id'";
    $resultado=metodoDelete($query);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

header("HTTP/1.1 400 Bad Request");

?>